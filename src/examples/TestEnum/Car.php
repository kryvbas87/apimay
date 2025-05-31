<?php

namespace App\examples\TestEnum;

use App\examples\TestEnum\Color;

class Car
{
    private Color $color;

    public function __construct(Color $color)
    {
        $this->color = $color;
    }

    function setColor(Color $color): void
    {
        $this->color = $color;
    }
}


