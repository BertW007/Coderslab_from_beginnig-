<?php

$n=5;

for ($i=1;$i<=$n;$i++){
    for ($j=1;$j<=$n;$j++) {
        if (($i + $j)%2 == 0) {
            echo '&nbsp';
        }else{
            echo '*';
        }
    }echo '<br>';
}