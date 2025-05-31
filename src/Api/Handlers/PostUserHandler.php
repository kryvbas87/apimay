<?php

namespace App\Api\Handlers;

use App\Api\Repositories\UserRepository;
use App\Api\Request\Request;
use App\Api\Response\JsonResponse;

class PostUserHandler implements HandlerInterface
{
    public function handle(Request $request): void
    {
        $name = trim($request->input('name', ''));
        $email = trim($request->input('email', ''));

        if ($name === '' || $email === '') {
            JsonResponse::send(['error' => 'Name and email are required'], 400);
        }

        $repository = new UserRepository();
        $id = $repository->createUser($name, $email);

        JsonResponse::send(['user_id' => $id], 201);
    }
}