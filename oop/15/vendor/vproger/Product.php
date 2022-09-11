<?php

namespace vproger;

abstract class Product
{
    private $name;
    protected $price;
    private $discount = 10;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;

    }

    public  function getProduct()
    {
        return "<hr>
        <b>О товаре:</b><br>
        Наименование: {$this->name}<br>
        Цена со скидкой: {$this->getPrice()}<br>";
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price - ($this->discount / 100 * $this->price);
    }


    public function setDiscount(int $discount): void
    {
        $this->discount = $discount;
    }

    public function getDiscount(): int
    {
        return $this->discount;
    }
    abstract protected function addProduct($name, $price);
}