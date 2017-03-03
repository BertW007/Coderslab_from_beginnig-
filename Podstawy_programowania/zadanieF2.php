<?php

function randfor()
{
    //jeden sposob,
//    static $ab = 1;
//    $random = rand(0, 20);
//    if ($random == 10) {
//        echo 'Liczba 10 znaleziona w ' . $ab . ' losowaniu.';
//        return;
//    } else {
//        echo $random . ' - zła liczba,<br>';
//        $ab++;
//        randfor();
//    }

    //drugi sposob
    do {
        $array[] = rand(0, 20);
        if (end($array) != 10) {
            echo end($array) . ' - zła liczba,<br>';
        }

    } while (end($array) != 10);
    echo 'Liczba 10 wylosowana w ' . count($array) . ' losowaniu.';
}

randfor();