<?php

/**
 * Created by PhpStorm.
 * User: wiktor
 * Date: 10.03.17
 * Time: 18:01
 */
class Employee
{
    private $id, $firstName, $lastName, $salary;

    public function __construct($id, $firstName, $lastName, $salary)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setSalary($salary);
        $this->id = $id;

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function raiseSalary($percent)
    {
        if (is_numeric($percent) && $percent >= 0) {
            $this->salary += ($percent / 100) * $this->salary;
        }
    }
}

