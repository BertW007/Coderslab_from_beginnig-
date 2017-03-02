<?php

/**
 * @param $a
 * @param $x
 * @return int
 */

function power($a, $x)
{
    $result = 1;
    if ($x == 0) {     //kiedy x rowne 0
        $result = 1;
    } elseif (is_integer($x)) { // kiedy x jest liczba calkowita
        for ($i = 1; $i <= abs($x); $i++) { // jesli x jest liczba dodatnia
            $result *= $a;
        }
        if ($x < 0) { // jesli x jest liczba ujemna
            $result = 1 / $result;
        }
    }
    return $result;
}

echo power(3,-2);

//rozważony przypadek gdy: x=0, x jest liczba calkowita i x jest wiekszy od 0 i mniejszy od 0;
//trzeba zrobic jeszcze dla ulamkow, i ujemnego a

