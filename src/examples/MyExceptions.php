<?php

namespace App\examples;

class MyExceptions
{
    public function divide($a, $b)
    {
        if ($b === 0) {
            //throw new \Throwable("Деление на ноль невозможно<br>");
        }
        return $a / $b;
    }

    public function start(){
        echo "start<br>";

//        try {
            echo "we try<br>";
            $a  = 1;
            $b  = 0;

            if ($b === 0) {
                throw new MyNewExcepion("Деление MyNewExcepion на ноль MyNewExcepion невозможно<br>");
            }
//        } catch (MyNewExcepion $e) {
//            echo "we catch<br>";
//            echo $e->getMessage();
//        }

        echo "end<br>";
    }
}