<?php

function print2DTable($table)
{
    foreach ($table as $key => $array) {
        foreach ($array as $value) {
            echo $value;
        }
        echo '<br>';
    }
}

$table = [
    [1, 2, 3, 4, 5],
    [1, 2, 3, 4, 5],
    [1, 2, 3, 4, 5],
    [1, 2, 3, 4, 5],
    [1, 2, 3, 4, 5]
];

print2DTable($table);
echo '<hr>';

function getMatrixTrace($array){
    $sum = 0;
    foreach ($array as $key => $tab){
        $sum += $tab[$key];
    }
    return $sum;
}

echo getMatrixTrace($table);