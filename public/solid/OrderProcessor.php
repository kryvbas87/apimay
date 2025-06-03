<?php

namespace solid;

class OrderProcessor
{
    public function process(array $orderData): void
    {
        // 1. Валидация
        if (empty($orderData['product_id']) || empty($orderData['user_email'])) {
            $this->logError("Missing data in order");
            return;
        }

        // 2. Сохраняем в БД
        $pdo = new PDO('mysql:host=localhost;dbname=shop', 'root', 'root');
        $stmt = $pdo->prepare("INSERT INTO orders (product_id, user_email) VALUES (?, ?)");
        $stmt->execute([$orderData['product_id'], $orderData['user_email']]);

        // 3. Шлём email
        mail($orderData['user_email'], 'Order Confirmed', 'Your order has been placed.');

        echo "Order processed\n";
    }

    private function logError(string $message): void
    {
        file_put_contents('log.txt', date('Y-m-d H:i:s') . " ERROR: $message\n", FILE_APPEND);
    }
}

//🔍 Проблемы:
//❌ SRP (Single Responsibility Principle) нарушен — класс делает всё: валидацию, БД, email, лог.
//❌ OCP (Open/Closed) — невозможно расширить поведение без правки кода.
//❌ LSP (Liskov) — если бы был родитель, то подмена могла бы сломать поведение.
//❌ ISP (Interface Segregation) — если бы был интерфейс, он был бы раздут.
//❌ DIP (Dependency Inversion) — жёсткие зависимости от PDO, mail() и file_put_contents.