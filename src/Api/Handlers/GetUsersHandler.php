<?php

namespace App\Api\Handlers;

use App\Api\Repositories\UserRepository;
use App\Api\Request\Request;
use App\Api\Response\JsonResponse;

class GetUsersHandler implements HandlerInterface
{
    private UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handle(Request $request): void
    {
        $id = $request->get('id');

        if ($id !== null && ctype_digit($id)) {
            $user = $this->repository->getUserById((int)$id);
            JsonResponse::send($user ?? ['error' => 'User not found'], $user ? 200 : 404);
            return;
        }

        JsonResponse::send($this->repository->getAllUsers());
    }
}

