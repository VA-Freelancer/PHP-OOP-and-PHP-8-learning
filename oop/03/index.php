<?php
error_reporting(-1);

require_once $_SERVER['DOCUMENT_ROOT'] . '/oop/classes/Car.php';

function debug($data)
{
    echo "<pre>" . print_r($data, true) . "</pre>";
}
$car1 = new Car();

$car1->color = 'черный';
$car1->brand = 'volvo';

echo $car1->getCarInfo();
