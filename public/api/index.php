<?php

use App\Api\Routing\Router;
use App\Api\Request\Request;

require_once __DIR__ . '/../../vendor/autoload.php';

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

$request = new Request();
Router::handle($request);

