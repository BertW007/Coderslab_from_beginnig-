<?php


function perfectNumbers ($n){
    $dividersSum = 0;
    for ($i = 2; $i<=$n;$i++){
        $divider = $n/$i;
        if (is_integer($divider) ? $dividersSum += $divider : false);
    }
    if ($dividersSum == $n){
        return true;
    }else{
        return false;
    }

}

var_dump(perfectNumbers(28));