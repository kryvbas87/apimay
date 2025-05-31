<?php

namespace App\patterns\Strategy\CostStrategy;

use App\patterns\Strategy\CostStrategy;
use App\patterns\Strategy\Lesson;

class TimedCostStrategy extends CostStrategy
{
    public function cost(Lesson $lesson)
    {
        return $lesson->getDuration() * 5;
    }

    function chargeType()
    {
        return 'Почасовая оплата';
    }
}