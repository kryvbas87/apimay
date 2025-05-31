<?php

namespace App\examples;

class MagicMethods
{
    private $data = [];

    public function __get(string $name){
        return $this->data[$name] ?? null;
    }

    public function __set($name, $value){
        $this->data[$name] = $value;
    }

}