<?php

namespace App\patterns\FactoryMethod\Practic\Notifier;

use App\patterns\FactoryMethod\Practic\Notifier;

class EmailNotifier implements Notifier
{

    public function send(string $string): void
    {
        echo "Отправлено email: Привет!";
    }
}