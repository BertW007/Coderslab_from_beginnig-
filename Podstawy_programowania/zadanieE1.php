<?php

function FooBar ($x){
    for ($i=1;$i<=$x;$i++){
        if($i%3==0&&$i%5==0){
            echo 'FOOBAR';
        }elseif($i%3==0){
            echo 'Foo';
        }elseif($i%5==0){
            echo 'Bar';
        }else{
            echo $i;
        }
    }
}

FooBar(15);
