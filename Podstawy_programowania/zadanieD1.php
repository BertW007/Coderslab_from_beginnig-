<?php

//normal

$n = 10;

for ($i = 1; $i<=$n;$i++){
    echo '<br>';
    for ($j=1;$j<=$n;$j++){
        echo '*';
    }
}

//function

echo '<hr>';
function stars ($n)
{
    for ($i = 1; $i <= $n; $i++) {
        echo '<br>';
        for ($j = 1; $j <= $n; $j++) {
            echo '*';
        }
    }
}

stars(5);