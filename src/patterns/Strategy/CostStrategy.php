<?php

namespace App\patterns\Strategy;

abstract class CostStrategy
{
    abstract public function cost(Lesson $lesson);
    abstract public function chargeType();
}