<?php

function max2 ($a, $b){
    if ($a>$b){
        return $a;
    }else{
        return $b;
    }
}
function max3 ($a,$b,$c){
    return max2(max2($a,$b),$c);
}

echo max3(5,2,3);