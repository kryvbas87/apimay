<?php

namespace App\Api\Handlers;

use App\Api\Repositories\UserRepository;
use App\Api\Request\Request;
use App\Api\Response\JsonResponse;

class GetUsersHandler implements HandlerInterface
{
    public function handle(Request $request): void
    {
        $repository = new UserRepository();

        $id = $request->get('id');

        if ($id !== null && ctype_digit($id)) {
            $user = $repository->getUserById((int)$id);
            JsonResponse::send($user ?? ['error' => 'User not found'], $user ? 200 : 404);
        }

        JsonResponse::send($repository->getAllUsers());
    }
}
