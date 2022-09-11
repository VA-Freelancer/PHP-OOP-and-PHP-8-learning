<?php

namespace app;

use vproger\interfaces\I3D;
use vproger\Product;

class BookProduct extends Product implements I3D
{
    public $numPages;

    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
        $this->setDiscount(5);
        var_dump(self::class);
    }


    public  function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Цена без скидки: {$this->price}<br>";
        $out .= "Кол-во страниц: {$this->numPages}<br>";
        $out .= "Скидка: {$this->getDiscount()}%<br>";
        return $out;
    }
    public function getNumPages()
    {
        return $this->numPages;
    }
    public function addProduct($name, $price, $numPages = 0)
    {
        // TODO: Implement addProduct() method.
        var_dump($name);
        var_dump($price);
        var_dump($numPages);

    }
    public function test()
    {
        // TODO: Implement test() method.
        var_dump(self::TEST2);
    }
}