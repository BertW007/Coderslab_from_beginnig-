<?php

function check($x)
{
    $array = [];
    for ($i = 1; $i <= $x; $i++) {
        for ($j = 1; $j < $i; $j++) {
            if (is_integer($i / $j)) {
                $array[] = $j;
            }
        }
        if (array_sum($array) == $i) {
            echo 'Liczba ' . $i . ' jest doskonała.<br>';
            $array = [];
        } elseif (array_sum($array) < $i) {
            echo 'Liczba ' . $i . ' jest niekompletna.<br>';
            $array = [];
        } else {
            echo 'Liczba ' . $i . ' nie jest ani doskonała, ani niekompletna.<br>';
            $array = [];
        }
    }
    return $array;
}

check(28);