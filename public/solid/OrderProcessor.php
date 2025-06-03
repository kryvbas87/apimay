<?php

namespace solid;

class OrderProcessor
{
    private OrderValidator $orderValidator;
    private OrderRepository $orderRepository;
    private EmailService $emailService;
    private Logger $logger;

    public function __construct(
        OrderValidator $orderValidator,
        OrderRepository $orderRepository,
        EmailService $emailService,
        Logger $logger
    ) {
        $this->orderValidator = $orderValidator;
        $this->orderRepository = $orderRepository;
        $this->emailService = $emailService;
        $this->logger = $logger;
    }

    public function process(array $orderData): void
    {
        if (!$this->orderValidator->validate($orderData)) {
            $this->logger->log("Invalid order data");
        }

        $this->orderRepository->save($orderData);
        $this->emailService->send($orderData['user_email'], 'Your order has been placed.');

        echo "Order processed\n";
    }
}

//🔍 Проблемы:
//✅ SRP (Single Responsibility Principle) нарушен — класс делает всё: валидацию, БД, email, лог.
//❌ OCP (Open/Closed) — невозможно расширить поведение без правки кода.
//❌ LSP (Liskov) — если бы был родитель, то подмена могла бы сломать поведение.
//❌ ISP (Interface Segregation) — если бы был интерфейс, он был бы раздут.
//❌ DIP (Dependency Inversion) — жёсткие зависимости от PDO, mail() и file_put_contents.