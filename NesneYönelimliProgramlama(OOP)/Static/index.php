<?php

class Customer{
    public static $firstName;
    public $lastName;

    public static function setName($firstName){
        self::$firstName = $firstName;
    }

    public static function getName(){
        return self::$firstName;
    }
}

Customer::setName("alice");
echo Customer::getName();