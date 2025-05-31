<?php

namespace App\examples\PozdnStatSvjz;

class Animal {
    public static function getName() {
        return self::class;
    }

    public static function whoAmI() {
        echo static::getName();
    }
}
