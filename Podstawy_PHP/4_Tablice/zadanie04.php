<?php

function returnArray ($array){
    $result = [];
    $var = array_sum($array)/count($array);
    foreach ($array as $value){
        if ($value<$var){
            $result[] = $value;
        }
    }
    return $result;
}
$array = [1,5,6,4,5,9];

var_dump(returnArray($array));