<?php

namespace App\Api\Handlers;

use App\Api\Repositories\UserRepository;
use App\Api\Request\Request;
use App\Api\Response\JsonResponse;

class PutUserHandler implements HandlerInterface
{
    public function handle(Request $request): void
    {
        $id = $request->get('id');

        if (!ctype_digit($id)) {
            JsonResponse::send(['error' => 'Invalid or missing user ID'], 400);
        }

        $name = trim($request->input('name', ''));
        $email = trim($request->input('email', ''));

        if ($name === '' || $email === '') {
            JsonResponse::send(['error' => 'Name and email are required'], 400);
        }

        $repository = new UserRepository();
        $updated = $repository->updateUser((int)$id, $name, $email);

        if (!$updated) {
            JsonResponse::send(['error' => 'User not found or nothing to update'], 404);
        }

        JsonResponse::send(['message' => 'User updated'], 200);
    }
}