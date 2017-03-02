<?php

//normal

$a = 11;
$b = 4;
$c = 11;

if($a>=$b && $a>=$c){
    echo 'Najwieksza liczba to a= '.$a;
}elseif($b>=$c && $b>=$a){
    echo 'Najwieksza liczba to b= '.$b;
}else{
    echo 'Najwieksza liczba to c= '.$c;
}

//function
echo '<hr>';

function biggest ($a,$b,$c)
{
    if ($a >= $b && $a >= $c) {
        return $a;
    } elseif ($b >= $c && $b >= $a) {
        return $b;
    } else {
        return $c;
    }
}

echo 'Największa liczba to: ';
echo biggest(44,23,5);