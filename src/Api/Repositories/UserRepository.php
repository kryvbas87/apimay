<?php

namespace App\Api\Repositories;

use App\Api\Database;
use PDO;

class UserRepository
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAllUsers(): array
    {
        $stmt = $this->db->prepare("SELECT * FROM users");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserById(int $id): ?array
    {
        $stmt = $this->db->prepare('SELECT * FROM users WHERE id = :id');
        $stmt->execute(['id' => $id]);

        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    public function createUser(string $name, string $email): int
    {
        $stmt = $this->db->prepare('INSERT INTO users (name, email) VALUES (:name, :email)');

        $stmt->execute(['name' => $name, 'email' => $email]);
        return (int) $this->db->lastInsertId();
    }

    public function deleteUser(int $id): bool
    {
        $stmt = $this->db->prepare('DELETE FROM users WHERE id = :id');

        return $stmt->execute(['id' => $id]);
    }

    public function updateUser(int $id, string $name, string $email): bool
    {
        $stmt = $this->db->prepare('UPDATE users SET name = :name, email = :email WHERE id = :id');

        $stmt->execute(['id' => $id, 'name' => $name, 'email' => $email]);

        return $stmt->rowCount() > 0;
        // Метод execute() возвращает true, даже если ничего не обновилось (например, потому что запись не найдена или значения не изменились).
        // Теперь метод вернёт false, если пользователь с таким ID не найден или данные были такими же.
    }

    public function patchUser(int $id, array $fields): bool
    {
        $setParts = [];
        $params = ['id' => $id];

        foreach ($fields as $key => $value) {
            $setParts[] = "$key = :$key";
            $params[$key] = $value;
        }

        $sql = 'UPDATE users SET ' . implode(', ', $setParts) . ' WHERE id = :id';
        $stmt = $this->db->prepare($sql);

        return $stmt->execute($params);
    }
}