<?php

function printTable($array){
    foreach ($array as $value){
        echo $value .'<br>';
    }
}

$array = [5,6,'natasza',8,9];
printTable($array);