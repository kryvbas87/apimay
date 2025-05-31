<?php

use App\Api\Repositories\UserRepository;

require_once ('../../vendor/autoload.php');

header('Content-Type: application/json');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$controller = new UserRepository();

if ($uri === '/api/users' && $method === 'GET') {
    $id = (int) $_GET['id'];
    if ($id) {
        echo json_encode($controller->getUserById($id));
        exit;
    }

    echo json_encode($controller->getAllUsers());
}

if ($uri === '/api/users' && $method === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    // Проверка на корректный JSON
    if (!is_array($data)) {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid JSON']);
        exit;
    }

    // Проверка на наличие и непустоту параметров
    $name = trim($data['name'] ?? '');
    $email = trim($data['email'] ?? '');

    if ($name === '' || $email === '') {
        http_response_code(400);
        echo json_encode(['error' => 'Name and email are required']);
        exit;
    }

    $id = $controller->createUser($data['name'], $data['email']);
    echo json_encode(['user_id' => $id]);
}

if ($uri === '/api/users' && $method === 'DELETE') {
    $id = $_GET['id'] ?? null;

    if (!ctype_digit($id)) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing or invalid user ID']);
        exit;
    }

    $success = $controller->deleteUser((int)$id);

    echo json_encode(['success' => $success]);
    exit;
}
