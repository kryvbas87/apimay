<?php

namespace App\patterns\Prototype;

interface NotifierInterface
{
    public function send(string $message): void;
    public function clone(): NotifierInterface;
}