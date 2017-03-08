<?php

function rentCost($days){
    $cost = 0;
    switch ($days){
        case 1:
            $cost = 200;
            break;
        case $days<=3:
            $cost = $days*180;
            break;
        case $days<=7:
            $cost = $days*160;
            break;
        case $days>=8:
            $cost = $days*150;
            break;
    }
    if ($days>=7){
        $discount = $days/7;
        $discount = floor($discount);
    }
    $sum = $cost-$discount*50;
    return $sum;
}

echo rentCost(7);