<?php

//normal

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

//function
echo '<hr>';

function sumAll($a,$b)
{
    $result = 0;

    for ($i = $a; $i <= $b; $i++) {
        $result += $i;
    }

    return $result;
}


function sumAll2 ($a,$b)
{
    $result = 0;
    while ($a <= $b) {
        $result += $a;
        $a++;
    }

    return $result;
}

echo sumAll(5,10);
echo sumAll(9,10);