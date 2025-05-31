<?php

namespace App\Api\old;

abstract class Controller
{
    abstract public function handle(string $method): void;
}