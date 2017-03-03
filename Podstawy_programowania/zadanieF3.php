<?php

function PiNumber ($n){
    $suma = 0;
    for ($i = 1;$i<=$n;$i+=4){
        $roznica = ((1/$i)-(1/($i+2)));
        $suma+=$roznica;
    }
    return 4*$suma;
}

echo PiNumber(100);