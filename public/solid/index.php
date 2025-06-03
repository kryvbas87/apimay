<?php
use Solid\OrderProcessor;
use Solid\OrderValidator;
use Solid\OrderRepository;
use Solid\Mailer;
use Solid\FileLogger;

$pdo = new PDO('mysql:host=localhost;dbname=shop', 'root', 'root');

$orderProcessor = new OrderProcessor(
    new OrderValidator(),
    new OrderRepository($pdo),
    new Mailer(),
    new FileLogger() // или new ConsoleLogger()
);

$orderProcessor->process([
    'user_email' => 'john@example.com',
    'product_id' => 42,
    'quantity' => 3
]);
