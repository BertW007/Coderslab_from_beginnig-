<?php

function skrypt ($liczba){
    $array = [];
    for ($i = $liczba;$i>=1;$i--){
        if ($i%2!=0 ? $array[]=$i : false );
    }
    return array_sum($array);
}

echo skrypt(10);