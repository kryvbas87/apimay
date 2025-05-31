<?php

namespace App;

trait HasRest
{
    public function rest(): void
    {
        print_r($this->getName() . ' has rest');
    }
}