<?php

//normal
$percentage = 98;

if ($percentage>=99){
    echo 'celujący';
}elseif ($percentage>=85){
    echo 'bardzo dobry';
}elseif ($percentage>=70){
    echo 'dobry';
}elseif ($percentage>=55){
    echo 'dostateczny';
}elseif ($percentage>=40){
    echo 'dopuszczający';
}else{
    echo 'niedostateczny';
}

echo '<hr>';
//function

function grade($percentage)
{
    if ($percentage >= 99) {
        return 'celujący';
    } elseif ($percentage >= 85) {
        return 'bardzo dobry';
    } elseif ($percentage >= 70) {
        return 'dobry';
    } elseif ($percentage >= 55) {
        return 'dostateczny';
    } elseif ($percentage >= 40) {
        return 'dopuszczający';
    } else {
        return 'niedostateczny';
    }
}

echo grade(99);