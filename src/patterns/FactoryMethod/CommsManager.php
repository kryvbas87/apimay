<?php

namespace App\patterns\FactoryMethod;

abstract class CommsManager
{
    abstract public function getHeaderText();
    abstract public function getApptEncoder();
    abstract public function getFooterText();
}