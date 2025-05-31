<?php

namespace App\Api\old;

class Router
{
    public static function route(string $uri, string $method)
    {
        switch ($uri) {
            case '/api/hello':
                (new HelloController())->handle($method);
                break;
            case '/api/echo':
                (new EchoController())->handle($method);
                break;
            default:
                http_response_code(404);
                echo json_encode(['error' => 'Not Found']);
                break;
        }
    }
}