<?php

$n = 5;

for ($i=0;$i<$n;$i++){
    echo "<br>";
    for ($j=0;$j<=$i;$j++){
        echo '*';
    }
}

echo '<hr>';

for ($i=1;$i<=$n;$i++){
    echo "<br>";
    for ($j=1;$j<=$n;$j++){
        if ($j<=$i) {
            echo '*';
        }
    }
}