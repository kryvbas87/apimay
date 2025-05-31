<?php

namespace App\Api\old;

class EchoController
{
    public function handle(string $method): void
    {
        if ($method === 'POST') {
            $data = json_decode(file_get_contents('php://input'), true);
            echo json_encode(['you_sent_new' => $data]);
        } else {
            http_response_code(405);
            echo json_encode(['error' => 'Method Not Allowed']);
        }
    }
}