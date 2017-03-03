<?php

function bruteForce ($n){
    $array = [];
    for ($i=1;$i<=$n;$i++){
        if ($n%$i==0){
            $array[]=$n;
        }
    }
    if (count($array)==2){
        return true;
    }elseif (count($array)>2){
        return false;
    }
}

var_dump(bruteForce(27));