<?php

namespace App\patterns\FactoryMethod\Practic;

class NotificationService
{
    public function notifyUser(NotifierFactory $factory, string $message): void
    {
        $notifier = $factory->createNotifier();
        $notifier->send($message);
    }
}
// Есть интерфейс Notifier для уведомлений с методом send
// его реализуют конкретные типы уведомлений, например смс и email (SmsNotifier и EmailNotifier)
// задача — создать нужный объект уведомления, но не привязываться к конкретному классу
// делигируем эту задачу на фабрики, которые наследуются от абстрактной фабрики NotifierFactory
// теперь, вызывая метод createNotifier() у фабрики, получаем нужный объект (SMS, Email и т.д.)
// а уже у него вызываем метод send()