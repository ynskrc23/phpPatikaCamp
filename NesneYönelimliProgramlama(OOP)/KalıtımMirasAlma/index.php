<?php

class Person {
    public $id;
    public $firstName;
    public $lastName;
    public $age;
}

class Customer extends Person
{
    public $email;
}

class Employee extends Person
{
    public $salary;
}

class PersonManager
{
    public function List(){
        echo "listelendi";
    }

    public function Create(){
        echo "oluşturuldu";
    }

}

class CustomerManager extends PersonManager
{

}

class EmployeeManager extends PersonManager
{
    public function BestEmployee(){
        echo "ayın elemanı seçildi";
    }
}

$customerManager = new CustomerManager();
$employeeManager = new EmployeeManager();

$employeeManager->BestEmployee();
echo "<br>";
$customerManager->List();