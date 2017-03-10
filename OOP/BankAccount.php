<?php

class BankAccount
{
    private $number, $cash;

    public function __construct($number)
    {
        $this->setNumber($number);
        $this->setCash();
    }

    private function setNumber($number)
    {
        if(is_int($number) ? $this->number = $number : $this->number = 0);
    }

    private function setCash()
    {
        $this->cash = 0.0;
    }

    public function depositCash($amount)
    {
        if (is_numeric($amount) && $amount>0){
            $this->cash +=$amount;
        }
        echo '+'.$amount.'<hr>';
    }

    public function withdrawCash($amount)
    {
        if(is_numeric($amount) && $amount>0){
            if($amount<=$this->cash){
                $this->cash -=$amount;
                echo '-'.$amount.'<hr>';
            }else{
                echo 'brak wystarczających środków na koncie, pobrano tylko: '.$this->cash.'<hr>';
                $this->cash = 0;
            }
        }
    }

    public function printInfo()
    {
        echo sprintf('Konto numer: %d, wartość konta: %g <hr>', $this->number, $this->cash);
    }
}

$acc = new BankAccount(1234);
$acc->printInfo();
$acc->depositCash(12.99);
$acc->depositCash(121.32);
$acc->depositCash(12.11);
$acc->printInfo();
$acc->depositCash(12.43);
$acc->withdrawCash(99.99);
$acc->withdrawCash(99.99);
$acc->depositCash(121.32);
$acc->printInfo();
