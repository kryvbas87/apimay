<?php

namespace App\patterns\FactoryMethod\Practic\NotifierFactory;

use App\patterns\FactoryMethod\Practic\Notifier;
use App\patterns\FactoryMethod\Practic\NotifierFactory;

class SmsNotifierFactory extends NotifierFactory
{
    public function createNotifier(): Notifier
    {
        return new Notifier\SmsNotifier();
    }
}