<?php

namespace App\patterns\AbstractFactory\Practic;

interface LoggerInterface
{
    public function log(string $message): void;
}