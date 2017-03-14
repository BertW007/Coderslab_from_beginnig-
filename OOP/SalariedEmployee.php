<?php
include_once 'Employee.php';

class SalariedEmployee extends Employee
{
    public function computePayment()
    {
        return $this->getSalary()*190;
    }
}

$emp = new SalariedEmployee(1,'Wiktor', 'Ramut', 10);
echo $emp->computePayment();