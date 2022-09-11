<?php

class Car
{
    public string $color;
    public int $wheels = 4;
    public int $speed = 180;
    public string $brand;

    const TEST_CAR = 'Прототип';
    const TEST_CAR_SPEED = 300;

    public  static $counterCar = 0;

    public function  __construct(string $color, string $brand, int $speed, int $wheels = 4)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
        self::$counterCar++;
    }
    public static function getCount()
    {
        return self::$counterCar;
    }

    public function getCarInfo() {
        return "<h3>О моем авто:</h3>
        Марка: {$this->brand}<br>
        Цвет: {$this->color}<br>
        Кол-во колес: {$this->wheels}<br>
        Скорость: {$this->speed}<br>";
    }
    public function getPrototypeInfo()
    {
        return "<h3>Данные тестового авто:</h3>
        Наименование: " . self::TEST_CAR . "<br>
        Скорость: " . self::TEST_CAR_SPEED . "<br>";
    }
}