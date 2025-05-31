<?php

namespace App\Api\Response;

class JsonResponse
{
    public static function send($data, int $code = 200): void
    {
        http_response_code($code);
        echo json_encode($data);
        exit;
    }
}