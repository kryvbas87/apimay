<?php

namespace App\Api\old\Controllers;

use App\Api\Repositories\UserRepository;

class UserController
{
    private UserRepository $repository;

    public function __construct(?UserRepository $repository = null)
    {
        $this->repository = $repository ?? new UserRepository();
    }


    public function getAllUsers(): array
    {
        return $this->repository->getAll();
    }

    public function getUserById(int $id): ?array
    {
        return $this->repository->getById($id);
    }

    public function createUser(string $name, string $email): int
    {
        return $this->repository->create($name, $email);
    }

    public function deleteUser(int $id): bool
    {
        return $this->repository->delete($id);
    }
}
