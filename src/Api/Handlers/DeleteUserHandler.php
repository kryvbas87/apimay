<?php

namespace App\Api\Handlers;

use App\Api\Repositories\UserRepository;
use App\Api\Request\Request;
use App\Api\Response\JsonResponse;

class DeleteUserHandler implements HandlerInterface
{
    public function handle(Request $request): void
    {
        $id = $request->get('id');

        if (!ctype_digit($id)) {
            JsonResponse::send(['error' => 'Missing or invalid user ID'], 400);
        }

        $repository = new UserRepository();
        $success = $repository->deleteUser((int)$id);

        JsonResponse::send(['success' => $success]);
    }
}