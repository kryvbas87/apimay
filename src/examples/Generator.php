<?php

namespace App\examples;

class Generator
{
    private function getNumbers(): \Generator
    {
        yield 1;
        yield 2;
        yield 3;
    }

    public function start(): void
    {
        foreach ($this->getNumbers() as $number) {
            echo $number . PHP_EOL;
        }
    }
}