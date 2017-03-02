<?php

//normal
$x = 5;
$result = '';
for($i = 0; $i<=$x;$i++){
    if($i%2==0){
        echo $i." - parzysta<br>";
    }else{
        echo $i.' - nieparzysta<br>';
    }
}


//function
echo '<hr>';

function write($x)
{
    $result = '';
    for ($i = 0; $i <= $x; $i++) {
        if ($i % 2 == 0) {
            echo $i . " - parzysta<br>";
        } else {
            echo $i . ' - nieparzysta<br>';
        }
    }
}

write(5);