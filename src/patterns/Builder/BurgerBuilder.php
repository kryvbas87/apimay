<?php

namespace App\patterns\Builder;

class BurgerBuilder {
    private Burger $burger;

    public function __construct() {
        $this->burger = new Burger();
    }

    public function setBun(string $type): self {
        $this->burger->bun = $type;
        return $this;
    }

    public function setSauce(string $sauce): self {
        $this->burger->sauce = $sauce;
        return $this;
    }

    public function addTopping(string $topping): self {
        $this->burger->toppings[] = $topping;
        return $this;
    }

    public function build(): Burger {
        return $this->burger;
    }
}