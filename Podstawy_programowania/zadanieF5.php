<?php

function silnia($x){
    $result = 1;
    if ($x==0){
        $result = 1;
    }else{
        for ($i = 1;$i<= $x;$i++){
            $result *=$i;
        }
    }
    return $result;
}

function power($x,$y){
    $result = $x;
    for ($i = 1;$i<$y;$i++){
        $result *= $x;
    }
    return $result;
}


function mySin($x, $iterNum){
    $sin = 0;
    $sign = 1;
    for ($i = 1; $i<=$iterNum;$i+=2){
        $sin =$sin + ((power($x,$i))/silnia($i))*$sign;
        $sign = $sign * (-1);
    }
    return $sin;
}

function myCos($x, $iterNum){
    $cos = 0;
    $sign = 1;
    for ($i = 0; $i<=$iterNum;$i+=2){
        $cos =$cos + ((power($x,$i))/silnia($i))*$sign;
        $sign = $sign * (-1);
    }
    return $cos;
}

echo mySin(5,5).'<br>';
echo myCos(5,5).'<br>';

