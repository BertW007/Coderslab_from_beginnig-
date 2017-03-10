<?php


class Calculator
{
    private $array;
    private $num1;
    private $num2;

    public function __construct($num1, $num2)
    {
        $this->setNum1($num1);
        $this->setNum2($num2);
        $this->array = [];
    }

    /**
     * @param mixed $num1
     */
    public function setNum1($num1)
    {
        $this->num1 = $num1;
    }

    /**
     * @param mixed $num2
     */
    public function setNum2($num2)
    {
        $this->num2 = $num2;
    }

    public function add (){
        $this->array['add'] = $this->num2+$this->num1;
    }
    public function substract (){
        $this->array['sub'] = $this->num2-$this->num1;
    }
    public function multiply (){
        $this->array['multi'] = $this->num2*$this->num1;
    }
    public function divide (){
        $this->array['div'] = $this->num2/$this->num1;
    }
    public function getArray(){
        foreach ($this->array as $key => $value){
            echo $key,' - '.$value.'<br>';
        }
    }
}

$calc = new Calculator(5,10);
$calc->add();
$calc->substract();
$calc->multiply();
$calc->divide();
$calc->getArray();