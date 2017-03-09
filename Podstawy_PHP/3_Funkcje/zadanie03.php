<?php

function nominaly ($sum, &$one, &$two, &$five, &$ten){
    $ten = floor($sum/10);
    $sum = $sum - $ten*10;
    $five = floor($sum/5);
    $sum = $sum - $five*5;
    $two = floor($sum/2);
    $sum = $sum - $two*2;
    $one = $sum/1;
}
nominaly(193,$one,$two,$five,$ten);
echo $ten.'<br>';
echo $five.'<br>';
echo $two.'<br>';
echo $one.'<br>';