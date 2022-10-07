<?php

abstract class Product
{
    public $name;
    public $price;

    abstract public function productName($name);

    abstract public function productPrice($price);

    public function ProductAdd()
    {
        echo "name: ". $this->name."<br>";
        echo "price: ". $this->price."<br>";
    }

}

class Drink extends Product
{
    public function productName($name)
    {
        $this->name = $name;
    }

    public function productPrice($price)
    {
        $this->price = $price;
    }

}

$drinks = new Drink();
$drinks->productName("water");
$drinks->productPrice("2");

$drinks->ProductAdd();