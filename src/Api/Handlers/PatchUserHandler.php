<?php

namespace App\Api\Handlers;

use App\Api\Repositories\UserRepository;
use App\Api\Request\Request;
use App\Api\Response\JsonResponse;

class PatchUserHandler implements HandlerInterface
{
    public function handle(Request $request): void
    {
        $id = $request->get('id');

        if (!ctype_digit($id)) {
            JsonResponse::send(['error' => 'Invalid or missing user ID'], 400);
        }

        $fieldsToUpdate = [];

        $name = trim($request->input('name', ''));
        if ($name !== '') {
            $fieldsToUpdate['name'] = $name;
        }

        $email = trim($request->input('email', ''));
        if ($email !== '') {
            $fieldsToUpdate['email'] = $email;
        }

        if (empty($fieldsToUpdate)) {
            JsonResponse::send(['error' => 'No data to update'], 400);
        }

        $repository = new UserRepository();
        $updated = $repository->patchUser((int)$id, $fieldsToUpdate);

        if (!$updated) {
            JsonResponse::send(['error' => 'User not found or nothing updated'], 404);
        }

        JsonResponse::send(['message' => 'User updated'], 200);
    }
}
