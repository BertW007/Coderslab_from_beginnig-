<?php

function theBiggest ($a,$b,$c){
    if ($a==$b&& $a==$c){
        echo 'Wszystkie liczby są takie same.';
    }elseif ($a==$b || $a==$c || $b==$c){
        if($a==$b && $a<$c){
            return $c;
        }elseif ($a==$b && $a>$c){
            echo 'Dwie liczby są takie same.';
        }
        if($a==$c && $a<$b){
            return $b;
        }elseif ($a==$c && $a>$b){
            echo 'Dwie liczby są takie same.';
        }
        if($c==$b && $c<$a){
            return $a;
        }elseif ($c==$b && $c>$a){
            echo 'Dwie liczby są takie same.';
        }
    }elseif ($a>$b && $a>$c){
        return $a;
    }elseif ($b>$c){
        return $b;
    }else{
        return $c;
    }
}

echo theBiggest(7,44,45);