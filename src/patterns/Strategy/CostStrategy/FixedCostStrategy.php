<?php

namespace App\patterns\Strategy\CostStrategy;

use App\patterns\Strategy\CostStrategy;
use App\patterns\Strategy\Lesson;

class FixedCostStrategy extends CostStrategy
{
    public function cost(Lesson $lesson): int
    {
        return 30;
    }

    public function chargeType(): string
    {
        return 'Фиксированная ставка';
    }
}