<?php
use App\Api\Repositories\UserRepository;
use PDO;
use PHPUnit\Framework\TestCase;

class UserRepositoryTest extends TestCase
{
    private PDO $pdo;

    protected function setUp(): void
    {
        // Используем SQLite in-memory БД
        $this->pdo = new PDO('sqlite::memory:');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Создаем таблицу users
        $this->pdo->exec('
            CREATE TABLE users (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT NOT NULL,
                email TEXT NOT NULL
            )
        ');

        // Подменим singleton Database::getInstance()->getConnection()
        \App\Api\Database::setTestConnection($this->pdo);  // нужно реализовать такой метод
    }

    public function testCreateAndGetUserById(): void
    {
        $repo = new UserRepository();

        $id = $repo->createUser('Alice', 'alice@example.com');
        $user = $repo->getUserById($id);

        $this->assertIsArray($user);
        $this->assertSame('Alice', $user['name']);
        $this->assertSame('alice@example.com', $user['email']);
    }

    public function testUpdateUser(): void
    {
        $repo = new UserRepository();

        $id = $repo->createUser('Bob', 'bob@example.com');
        $success = $repo->updateUser($id, 'Bobby', 'bobby@example.com');

        $this->assertTrue($success);
        $user = $repo->getUserById($id);
        $this->assertSame('Bobby', $user['name']);
    }

    public function testDeleteUser(): void
    {
        $repo = new UserRepository();

        $id = $repo->createUser('Charlie', 'charlie@example.com');
        $success = $repo->deleteUser($id);
        $this->assertTrue($success);

        $this->assertNull($repo->getUserById($id));
    }

    public function testPatchUser(): void
    {
        $repo = new UserRepository();

        $id = $repo->createUser('Dave', 'dave@example.com');
        $repo->patchUser($id, ['name' => 'David']);

        $user = $repo->getUserById($id);
        $this->assertSame('David', $user['name']);
        $this->assertSame('dave@example.com', $user['email']);
    }
}
