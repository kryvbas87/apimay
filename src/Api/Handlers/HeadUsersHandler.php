<?php

namespace App\Api\Handlers;

use App\Api\Request\Request;

class HeadUsersHandler implements HandlerInterface
{
    public function handle(Request $request): void
    {
        // Можно проверить наличие ресурса, но не возвращать тело
        http_response_code(200);
        // Заголовки, если нужно, например:
        header('Content-Type: application/json');
    }
}
