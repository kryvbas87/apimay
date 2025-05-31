<?php

namespace App\Api\Handlers;

use App\Api\Request\Request;
use App\Api\Response\JsonResponse;

class OptionsUserHandler implements HandlerInterface
{
    private const ALLOWED_METHODS = ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS'];

    public function handle(Request $request): void
    {
        header('Allow: ' . implode(', ', self::ALLOWED_METHODS));
        http_response_code(204); // No Content
    }
}
