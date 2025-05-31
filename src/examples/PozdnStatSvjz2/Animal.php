<?php

namespace App\examples\PozdnStatSvjz2;

class Animal {
    public static function makeSound() {
        self::identify();
    }

    public static function identify() {
        echo "I am an Animal\n";
    }
}

