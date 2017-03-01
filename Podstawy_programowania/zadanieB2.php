<?php

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