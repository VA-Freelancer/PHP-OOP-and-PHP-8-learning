<?php
require_once 'classes/Car.php';

function debug($data)
{
    echo "<pre>" . print_r($data, true) . "</pre>";
}
echo Car::getCount();
echo "<br>";
$car1 = new Car('черный', 'volvo', 180);
echo Car::getCount();
echo "<br>";
$car2 = new Car('белый', 'bmw', 200 );
echo Car::getCount();
echo "<br>";


echo $car1->getCarInfo();
echo $car2->getCarInfo();
echo $car2->getPrototypeInfo();