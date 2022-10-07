<?php

class User {
    public  $name = "karaca";
    const age = 25;

    public function getName(){
        return  $this->name;
    }

    public function totalSum($number1, $number2){
        return $number1 + $number2;
    }
}

$user = new User();

echo $user->getName();