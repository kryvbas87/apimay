<?php

use App\Api\Handlers\GetUsersHandler;
use App\Api\Repositories\UserRepository;
use App\Api\Request\Request;
use PHPUnit\Framework\TestCase;

class GetUsersHandlerTest extends TestCase{
    public function testReturnsAllUsersWhenNoIdProvided(): void
    {
        // Подготавливаем фейковый массив пользователей
        $expectedUsers = [
          ['id' => 1, 'name' => 'John Doe'],
          ['id' => 2, 'name' => 'Jane ERW'],
          ['id' => 3, 'name' => 'Tjone CVB'],
        ];

        $repositoryMock = $this->getMockBuilder(UserRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        $repositoryMock->method('getAllUsers')->willReturn($expectedUsers);

        $requestMock = $this->getMockBuilder(Request::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['get'])  // мокируем только метод get, метод method() остаётся реальным
            ->getMock();

        $requestMock->method('get')->willReturn(null);

        $handler = new GetUsersHandler($repositoryMock);
        $handler->handle($requestMock);

        // Проверяем, что JsonResponse::send был вызван с правильными данными
        $this->assertEquals([
            'data' => $expectedUsers,
            'code' => 200,
        ], \App\Api\Response\JsonResponse::$lastResponse);
    }

    public function testReturnsSingleUserWhenIdIsProvided(): void
    {
        $expectedUser = ['id' => 2, 'name' => 'Jane ERW'];

        $repositoryMock = $this->getMockBuilder(UserRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        $repositoryMock->method('getUserById')->willReturn($expectedUser);

        $requestMock = $this->getMockBuilder(Request::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['get'])
            ->getMock();
        $requestMock->method('get')->willReturn('2');

        $handler = new GetUsersHandler($repositoryMock);
        $handler->handle($requestMock);

        $this->assertEquals([
            'data' => $expectedUser,
            'code' => 200,
        ], \App\Api\Response\JsonResponse::$lastResponse);
    }


}