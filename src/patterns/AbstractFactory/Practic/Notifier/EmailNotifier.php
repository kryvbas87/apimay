<?php

namespace App\patterns\AbstractFactory\Practic\Notifier;

use App\patterns\AbstractFactory\Practic\NotifierInterface;

class EmailNotifier implements NotifierInterface
{

    public function send(string $string): void
    {
        echo "Отправлено email: {$string}!";
    }
}