<?php

namespace App\patterns\AbstractFactory\Practic;

class NotificationService
{
    public function notifyAndLog(NotificationFactoryInterface $factory, string $message): void
    {
        $notifier = $factory->createNotifier();
        $logger = $factory->createLogger();

        $notifier->send($message);
        $logger->log('send message ' . $message);
    }
}
// Есть интерфейсы для нескольких связанных компонентов, например:
// - NotifierInterface с методом send()
// - LoggerInterface с методом log()

// Их реализуют конкретные типы, например:
// - SmsNotifier и EmailNotifier
// - SmsLogger и EmailLogger

// Задача — создавать связанные объекты уведомления и логирования, но не привязываться к конкретным классам

// Эту задачу делегируем фабрикам, которые реализуют общий интерфейс (или наследуются от абстрактного класса),
// например NotificationFactory с методами createNotifier() и createLogger()

// Теперь, вызывая методы createNotifier() и createLogger() у фабрики (SmsNotificationFactory, EmailNotificationFactory),
// мы получаем связанные объекты — например, SmsNotifier и SmsLogger

// Эти объекты можно использовать вместе: отправить уведомление и залогировать его отправку