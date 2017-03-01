<?php

$x = 5;
$result = 1;
for($i = 1;$i<=$x;$i++){
     $result *= $i;
 }

 echo $result;


$result = 1;
$j = 1;
while($j<=$x){
    $result *= $j;
    $j++;
}

echo $result;