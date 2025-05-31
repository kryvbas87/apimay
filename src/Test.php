<?php

namespace App;

class Test extends Developer
{
    public function __sleep()
    {
        print_r('asdasdsa asdasdsad');
        return ['name' => '123'];
        // TODO: Implement __sleep() method.
    }

//    public function __serialize(): array
//    {
//        //return ['name' => '123'];
//        // TODO: Implement __serialize() method.
//    }
}