<?php

include_once 'Employee.php';

class HourlyEmployee extends Employee
{
    public function computePayment($hours)
    {
        return $this->getSalary()*$hours;
    }
    public function printInfo()
    {
        echo sprintf('Id: %d, Name: %s, Surname: %s, Salary: %d',
            $this->id,
            $this->getFirstName(),
            $this->getLastName(),
            $this->getSalary()
        );
    }
}

//$employee = new HourlyEmployee(5,'Wiktor','Ramut',20);
//echo '<hr>';
//echo $employee->printInfo();
//$employee->raiseSalary(20);
//echo '<hr>';
//echo $employee->getSalary();
//echo '<hr>';
//echo $employee->computePayment(10);
//echo '<hr>';
//$employee->setSalary(50);
//$employee->raiseSalary(20);
//echo $employee->printInfo();
//echo '<hr>';
//echo $employee->computePayment(10);
//echo '<hr>';
