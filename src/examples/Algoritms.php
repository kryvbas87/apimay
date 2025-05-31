<?php

namespace App\examples;

class Algoritms
{
    //1. FizzBuzz
    //Вывести числа от 1 до 100.
    //Если число делится на 3 — вместо него вывести "Fizz",
    //если на 5 — "Buzz",
    //если на 3 и 5 — "FizzBuzz".
    public function fizzBuzz(int $number): array
    {
        $fizz = 3;
        $buzz = 5;
        $arr = [];

        for ($i = 1; $i <= $number; $i++) {
            $arr[] = $this->getFizzBuzzValue($i, $fizz, $buzz) . '<br>';
        }

        return $arr;
    }

    private function getFizzBuzzValue(int $i, int $fizz, int $buzz): string
    {
        if ($i % $fizz === 0 && $i % $buzz === 0) {
            return 'FizzBuzz';
        } elseif ($i % $fizz === 0) {
            return 'Fizz';
        } elseif ($i % $buzz === 0) {
            return 'Buzz';
        } else {
            return $i;
        }
    }

    // task 1 v2

    public function fizzBuzz2(int $number): array
    {
        $fizz = 3;
        $buzz = 5;

        return array_map(function ($i) use ($fizz, $buzz) {
            return $this->getFizzBuzzValue($i, $fizz, $buzz);
        }, range(1, $number));
    }

    //2. Палиндром
    //Проверить, является ли строка палиндромом.
    //Пример: "level" → true, "hello" → false
    public function isPalindrome(string $string): bool
    {
//        if ($string === strrev($string)) {
//            return true;
//        }
//
//        return false;
        return $string === strrev($string);
    }


//3. Сумма чисел массива
//Напиши функцию, которая принимает массив чисел и возвращает их сумму.
//Пример: [1, 2, 3, 4] → 10
    public function arraySum(array $array):  int
    {
        // return array_sum($array);

        $result = 0;
        foreach ($array as $value) {
            $result += $value;
        }

        return $result;
    }

    public function arraySum2(array $array):  int
    {
        return array_reduce($array, function ($carry, $item) {
            return $carry + $item;
        }, 0);
        //array_reduce — применяет функцию к каждому элементу массива, сводя его к одному значению.
        //$carry — аккумулятор, в котором хранится промежуточный результат.
        //$item — текущий элемент массива.
        //0 — начальное значение аккумулятора.
    }

//
//4. Поиск максимального элемента
//Вернуть наибольшее число из массива.
//Пример: [1, 99, 3, 7] → 99
    public function getMaxValue1(array $array):  int
    {
        $result = $array[0];

        foreach ($array as $value) {
            if ($value > $result) {
                $result = $value;
            }
        }

        return $result;
    }

    public function getMaxValue2(array $array):  int
    {
        return array_reduce($array, function ($carry, $item) {
            return $carry > $item ? $carry : $item;
        }, $array[0]);
    }

//
//5. Реверс строки
//Разверни строку в обратном порядке.
//Пример: "hello" → "olleh"
//
//6. Факториал (через рекурсию)
//Вычисли факториал числа n.
//Пример: factorial(5) → 120


}