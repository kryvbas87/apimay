<?php

namespace App\Api\Response;

class JsonResponse
{
    public static $lastResponse = null;

    public static function send($data, int $code = 200): void
    {
        if (php_sapi_name() === 'cli') {
            // В режиме CLI (например, при тестах) не делаем exit и сохраняем ответ
            self::$lastResponse = ['data' => $data, 'code' => $code];
            return;
        }

        http_response_code($code);
        echo json_encode($data);
        exit;
    }
}
