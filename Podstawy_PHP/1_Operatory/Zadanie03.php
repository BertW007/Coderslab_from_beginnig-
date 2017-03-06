<?php

function rectangle ($bokA, $bokB){
    $square = $bokA * $bokB;
    echo $square.'<br>';
    $circuit = $bokA*2 + $bokB*2;
    echo $circuit;
}

rectangle(5,10);