<?php

namespace App\patterns\FactoryMethod\ApptEncoder;

use App\patterns\FactoryMethod\ApptEncoder;

class MegaApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return 'Данные о встрече закодированы в формате MegaCal';
    }
}