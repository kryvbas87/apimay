<?php

namespace App\examples;

class ArrayMap
{
    public function doubleArrayElements(array $array): array
    {
        return array_map(function ($item) {
            return $item * 2;
        }, $array);
    }

    public function convertToUppercase(array $array): array
    {
        return array_map(function ($item) {
            return strtoupper($item);
        }, $array);
    }
}