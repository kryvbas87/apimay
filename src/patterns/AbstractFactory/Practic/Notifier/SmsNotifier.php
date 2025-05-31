<?php

namespace App\patterns\AbstractFactory\Practic\Notifier;

use App\patterns\AbstractFactory\Practic\NotifierInterface;

class SmsNotifier implements NotifierInterface
{

    public function send(string $string): void
    {
        echo "Отправлено SMS: {$string}!";
    }
}