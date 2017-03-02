<?php

$a = 5;
$b = 10;
$result = 0;

for($i = $a;$i<=$b;$i++){
    $result += $i;
}

echo $result;

$result=0;
while($a<=$b){
    $result += $a;
    $a++;
}

echo $result;