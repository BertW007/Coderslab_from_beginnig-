<?php

class BankAccount
{
    private $number, $cash;
    static private $nextAccNumber = 1;

    public function __construct()
    {
        $this->number = self::$nextAccNumber;
        $this->setCash();
        self::$nextAccNumber++;
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
                echo 'brak wystarczających środków na koncie nr: '.$this->number.', pobrano tylko: '.$this->cash.'<hr>';
                $this->cash = 0;
            }
        }
    }

    public function printInfo()
    {
        echo sprintf('Konto numer: %d, wartość konta: %g <hr>', $this->number, $this->cash);
    }
}

$acc = new BankAccount();
$acc1 = new BankAccount();
$acc2 = new BankAccount();
$acc3 = new BankAccount();
$acc4 = new BankAccount();
$acc->printInfo();
$acc1->printInfo();
$acc2->printInfo();
$acc3->printInfo();
$acc4->printInfo();
$acc->depositCash(12.99);
$acc->depositCash(121.32);
$acc->depositCash(12.11);
$acc->printInfo();
$acc->depositCash(12.43);
$acc->withdrawCash(99.99);
$acc->withdrawCash(99.99);
$acc->depositCash(121.32);
$acc->printInfo();
