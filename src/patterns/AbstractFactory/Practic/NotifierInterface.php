<?php

namespace App\patterns\AbstractFactory\Practic;

interface NotifierInterface
{
    public function send(string $string): void;
}
