<?php

function triangle($a, $b, $c)
{
    if ($a + $b > $c && $b + $c > $a && $a + $c > $b) {
        if ($a == $b && $b == $c) {
            echo 'Trójkąt jest równoboczny.';
        }elseif ($a==$b || $a==$c || $b==$c){
            echo 'Trójkąt jest równoramienny.';
        }else{
            echo 'Trójkąt jest różnoboczny.';
        }
    }else{
        echo 'Nie można zbudować trójkąta.';
    }
}

triangle(2,2,2);
echo '<br>';
triangle(2,3,4);
echo '<br>';
triangle(2,4,4);
echo '<br>';
triangle(1,2,3);
echo '<br>';
triangle(2,2,2);
echo '<br>';
triangle(2,3,5);
echo '<br>';
triangle(2,5,44);
echo '<br>';