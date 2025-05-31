<?php

namespace App\patterns\FactoryMethod\Practic;

interface Notifier
{
    public function send(string $string): void;
}