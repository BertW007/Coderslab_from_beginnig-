<?php
include_once 'Calculator.php';

class AdvancedCalculator extends Calculator
{
    public function power(){
        $this->array['power'] = pow($this->num1,$this->num2);
    }
    public function root(){
        $this->array['root'] = pow($this->num2,$this->num1);
    }
}

$calc = new AdvancedCalculator(3,9);
$calc->add();
$calc->substract();
$calc->multiply();
$calc->divide();
$calc->power();
$calc->root();
$calc->getArray();