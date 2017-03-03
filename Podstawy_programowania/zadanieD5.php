<?php
//normal
$n = 5;

echo '<table border="solid">';
for ($i = 1; $i <= $n; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= $n; $j++) {
        echo '<td>' . $i . 'x' . $j . '=' . $i * $j . '</td>';
    }
    echo '</tr>';
}
echo '</table>';

//function
echo '<hr>';

function table($n)
{
    echo '<table border="solid">';
    for ($i = 1; $i <= $n; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= $n; $j++) {
            echo '<td>' . $i . 'x' . $j . '=' . $i * $j . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

table(10);

