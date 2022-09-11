<?php
error_reporting(-1);
require_once $_SERVER['DOCUMENT_ROOT'] . '/oop/classes/FirstClass.php';

function debug($data)
{
    echo "<pre>" . print_r($data, true) . "</pre>";
}
$car1 = new Car();
$car2 = new Car();

$car1->color = 'черный';
$car1->brand = 'volvo';
$car1->year = 2018;
debug($car1);

$car2->color = 'белый';
$car2->brand = 'bmw';
$car2->speed = 200;
$car2->year = 2017;

debug($car2);

echo "<h3>О моем авто</h3>
Марка: {$car1->brand}<br>
Цвет: {$car1->color}<br>
Кол-во колес: {$car2->wheels}<br>
Год выпуска: {$car2->year}<br>
Скорость: {$car2->speed}<br>
";