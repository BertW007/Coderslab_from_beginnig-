<?php

$n = 5;

for ($i=1;$i<=$n;$i++){
    for ($j=1;$j<=$n;$j++){
        if ($i>=$j){
            echo '*';
        }else{
            echo $j;
        }
    } echo '<br>';
}

for ($i=$n;$i>=1;$i--){
    for ($j=1;$j<=$n;$j++){
        if ($i>=$j){
            echo '*';
        }else{
            echo $j;
        }
    } echo '<br>';
}

