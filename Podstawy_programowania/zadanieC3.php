<?php

$x = 5;
$result = '';
for($i = 0; $i<=$x;$i++){
    if($i%2==0){
        echo $i." - parzysta<br>";
    }else{
        echo $i.' - nieparzysta<br>';
    }
}


