<?php

namespace App\patterns\Builder;

class Burger
{
    public string $bun;
    public string $sauce;
    public array $toppings = [];

    public function describe()
    {
        echo "Burger with {$this->bun} bun, {$this->sauce} sauce, and " . implode(', ', $this->toppings) . '.\n';
    }

    // есть класс Burger со своими свойствами
    // создаем класс BurgerBuilder, с приватным свойством в котором хранится объект Burger
    // и методами которые сэтят в объект Burger какие-то свойства
    // и в конце метод build возвращаюий объект Burger
}