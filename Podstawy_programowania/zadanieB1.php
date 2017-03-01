<?php

$a = 5;
$b = 6;
$c = 10;

if ($a+$b>$c && $b+$c>$a && $c+$a>$b){
    echo 'Można zbudować trójkąt.';
}else {
    echo 'Nie można zbudować trójkąta';
}