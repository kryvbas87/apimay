<?php

namespace App\patterns\AbstractFactory\Practic\NotificationFactory;

use App\patterns\AbstractFactory\Practic\Notifier\SmsNotifier;
use App\patterns\AbstractFactory\Practic\Logger\SmsLogger;
use App\patterns\AbstractFactory\Practic\NotificationFactoryInterface;

class SmsNotificationFactory implements NotificationFactoryInterface
{
    public function createNotifier(): SmsNotifier
    {
        return new SmsNotifier();
    }

    public function createLogger(): SmsLogger
    {
        return new SmsLogger();
    }
}