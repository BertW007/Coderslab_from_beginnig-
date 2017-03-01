<?php

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