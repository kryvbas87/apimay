<?php

namespace App\patterns\FactoryMethod\Practic;

abstract class NotifierFactory
{
    abstract public function createNotifier(): Notifier;
}