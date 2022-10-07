<?php

class User {
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function __destruct(){
        $this->username = "";
        $this->password = "";
    }

    public function getAll(){
        return $this->username . "&" . $this->password;
    }

}

$user = new User("alice","123456");
echo $user->getAll();