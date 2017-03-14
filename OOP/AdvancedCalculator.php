<?php
include_once 'Calculator.php';

class AdvancedCalculator extends Calculator
{
    static private $pi = 3.14;

    public function power(){
        $this->array['power'] = pow($this->num1,$this->num2);
    }
    public function root(){
        $this->array['root'] = pow($this->num2,$this->num1);
    }
    static public function computeCircleRadius($r)
    {
        return self::$pi*pow($r,2);
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
echo AdvancedCalculator::computeCircleRadius(4);