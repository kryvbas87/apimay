<?php

namespace App\patterns\FactoryMethod\Practic\Notifier;

use App\patterns\FactoryMethod\Practic\Notifier;

class SmsNotifier implements Notifier
{

    public function send(string $string): void
    {
        echo "Отправлено SMS: {$string}!";
    }
}