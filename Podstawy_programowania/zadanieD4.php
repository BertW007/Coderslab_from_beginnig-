<?php

//normal

$n = 5;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($i >= $j) {
            echo '*';
        } else {
            echo $j;
        }
    }
    echo '<br>';
}

for ($i = $n; $i >= 1; $i--) {
    for ($j = 1; $j <= $n; $j++) {
        if ($i >= $j) {
            echo '*';
        } else {
            echo $j;
        }
    }
    echo '<br>';
}

//function
echo '<hr>';

function stars($n)
{

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if ($i >= $j) {
                echo '*';
            } else {
                echo $j;
            }
        }
        echo '<br>';
    }
    for ($i = $n; $i >= 1; $i--) {
        for ($j = 1; $j <= $n; $j++) {
            if ($i >= $j) {
                echo '*';
            } else {
                echo $j;
            }
        }
        echo '<br>';
    }
}

stars(5);