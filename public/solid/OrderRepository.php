<?php

namespace solid;

use PDO;

class OrderRepository
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function save(array $orderData): void
    {
        $stmt = $this->pdo->prepare("INSERT INTO orders (product_id, user_email) VALUES (?, ?)");
        $stmt->execute([$orderData['product_id'], $orderData['user_email']]);
    }
}