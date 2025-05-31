<?php

namespace App\patterns\AbstractFactory\Practic\Logger;

use App\patterns\AbstractFactory\Practic\LoggerInterface;

class EmailLogger implements LoggerInterface
{
    public function log(string $message): void
    {
        echo "Лог Email: $message\n";
    }
}