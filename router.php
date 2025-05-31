<?php

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$file = __DIR__ . $uri;

// Если запрашивается существующий файл — отдаем его как есть
if ($uri !== '/' && is_file($file)) {
    return false;
}

// API маршруты
if (str_starts_with($uri, '/api')) {
    require_once __DIR__ . '/src/Api/index.php';
    return;
}

// Иначе — основной индекс
require_once __DIR__ . '/public/index.php';
