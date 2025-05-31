<?php

namespace App\Api\Routing;

use App\Api\Handlers\HeadUsersHandler;
use App\Api\Handlers\OptionsUserHandler;
use App\Api\Handlers\PatchUserHandler;
use App\Api\Handlers\PutUserHandler;
use App\Api\Request\Request;
use App\Api\Handlers\GetUsersHandler;
use App\Api\Handlers\PostUserHandler;
use App\Api\Handlers\DeleteUserHandler;
use App\Api\Response\JsonResponse;

class Router
{
    public static function handle(Request $request): void
    {
        $routes = [
            'GET' => [
                '/api/users' => GetUsersHandler::class,
            ],
            'POST' => [
                '/api/users' => PostUserHandler::class,
            ],
            'PUT' => [
                '/api/users' => PutUserHandler::class,
            ],
            'PATCH' => [
                '/api/users' => PatchUserHandler::class,
            ],
            'DELETE' => [
                '/api/users' => DeleteUserHandler::class,
            ],
            'OPTIONS' => [
                '/api/users' => OptionsUserHandler::class,
            ],
            'HEAD' => [
                '/api/users' => HeadUsersHandler::class,
            ],
        ];

        $method = $request->method();
        $uri = $request->uri();

        if (isset($routes[$method][$uri])) {
            $handlerClass = $routes[$method][$uri];
            (new $handlerClass())->handle($request);
            return;
        }

        JsonResponse::send(['error' => 'Route not found'], 404);
    }
}