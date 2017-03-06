<?php

function three($a, $b, $c)
{
    if (
        (pow($a, 2) + pow($b, 2) == pow($c, 2)) ||
        (pow($b, 2) + pow($c, 2) == pow($a, 2)) ||
        (pow($a, 2) + pow($c, 2) == pow($b, 2))
    ) {
        echo 'Trójka pitagorejska';
    }
}

three(3, 5, 5);