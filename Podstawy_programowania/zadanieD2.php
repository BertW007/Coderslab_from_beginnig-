<?php
//normal

$n = 5;

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo '*';
    }
    echo "<br>";
}

echo '<hr>';

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($j <= $i) {
            echo '*';
        }
    }
    echo "<br>";
}

//function
echo '<hr>';

function stars($n)
{
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo '*';
        }
        echo "<br>";
    }
}

stars(5);