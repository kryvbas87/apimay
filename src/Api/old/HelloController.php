<?php

namespace App\Api\old;

class HelloController extends Controller
{
    public function handle(string $method): void
    {
        if ($method === 'GET') {
            echo json_encode(['message' => 'Hello world, my API!']);
        } else {
            http_response_code(405);
            echo json_encode(['error' => 'Method Not Allowed']);
        }
    }
}