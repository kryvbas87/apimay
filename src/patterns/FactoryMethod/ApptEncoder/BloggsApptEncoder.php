<?php

namespace App\patterns\FactoryMethod\ApptEncoder;

use App\patterns\FactoryMethod\ApptEncoder;

class BloggsApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return 'Данные о встрече закодированы в формате BloggsCal';
    }
}