<?php

namespace App\patterns\AbstractFactory\Practic\Logger;

use App\patterns\AbstractFactory\Practic\LoggerInterface;

class SmsLogger implements LoggerInterface
{
    public function log(string $message): void
    {
        echo "Лог SMS: $message\n";
    }
}