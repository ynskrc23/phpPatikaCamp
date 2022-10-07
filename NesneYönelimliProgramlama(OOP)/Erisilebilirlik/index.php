<?php

//Erişilebilirlik
//public: Her yerden erişilebilir.
//private: Sadece sınıf içerisinden erişilebilir.
//protected: Dışarıdan erişilmez. Sınıf içinde erişilebilir. Miras alma yoluyla kullanılabilir.

class User {
    public  $name;
    private $email;
    protected $password;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

}

$user = new User();

$user->setName("yunus");
$user->setEmail("yunus@gmail.com");
$user->setPassword("123456");

echo $user->getName()."<br>";
echo $user->getEmail()."<br>";
echo $user->getPassword();

