<?php

//normal

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

echo '<hr>';
//function

function silnia ($x)
{
    $result = 1;
    for ($i = 1; $i <= $x; $i++) {
        $result *= $i;
    }

    return $result;
}


function silnia2 ($x)
{
    $result = 1;
    $j = 1;
    while ($j <= $x) {
        $result *= $j;
        $j++;
    }

    return $result;
}

echo silnia(5);
echo silnia2(5);