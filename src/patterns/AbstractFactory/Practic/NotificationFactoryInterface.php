<?php

namespace App\patterns\AbstractFactory\Practic;

use App\patterns\FactoryMethod\Practic\Notifier;

interface NotificationFactoryInterface
{
    public function createNotifier(): NotifierInterface;
    public function createLogger(): LoggerInterface;
}