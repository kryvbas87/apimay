<?php

namespace App\patterns\AbstractFactory\Practic\NotificationFactory;

use App\patterns\AbstractFactory\Practic\Logger\EmailLogger;
use App\patterns\AbstractFactory\Practic\Notifier\EmailNotifier;
use App\patterns\AbstractFactory\Practic\NotificationFactoryInterface;

class EmailNotificationFactory implements NotificationFactoryInterface
{
    public function createNotifier(): EmailNotifier
    {
        return new EmailNotifier();
    }

    public function createLogger(): EmailLogger
    {
        return new EmailLogger();
    }
}