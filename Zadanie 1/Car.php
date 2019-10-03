<?php

// including necessary class or interfaces
include_once 'Motor.php';
include_once 'Movement.php';
include_once 'Dashboard.php';

class Car extends Motor implements Movement, Dashboard
{
    private $car_make;
    private $car_model;
    private $speed = 0;

    function __construct($car_make, $car_model)
    {
        $this->car_make = $car_make;
        $this->car_model = $car_model;
    }

    public function getCarMake()
    {
        return $this->car_make;
    }

    public function getCarModel()
    {
        return $this->car_model;
    }

    public function showSpeed()
    {
        return $this->speed;
    }

    public function showFuelConsumption()
    {
        return $this->fuel_consumption;
    }

    public function setFuelConsumption($fuel_consumption)
    {
        $this->fuel_consumption = $fuel_consumption;
    }

    public function getEngineCapacity()
    {
        return $this->engine_capacity;
    }

    public function setEngineCapacity($engine_capacity)
    {
        $this->engine_capacity = $engine_capacity;
    }

    public function go()
    {
        $this->speed = 50;
    }

  
    public function stop()
    {
        $this->speed = 0;
    }

    public function accelerate($velocity)
    {
        $this->speed += $velocity;
    }

    public function slowdown($velocity)
    {
        $this->speed -= $velocity;
    }

}

// ***** TESTING ******


// create new object
$car = new Car('Toyota', 'Yaris');

echo $car->getCarMake();
echo '<br>';
echo $car->getCarModel();
echo '<br>';

$car->setEngineCapacity(1.2);
echo $car->getEngineCapacity();
echo '<br>';

$car->setFuelConsumption(8);
echo $car->showFuelConsumption();
echo '<br>';

// few tests
echo $car->showSpeed();
$car->accelerate(33);
echo '<br>';

echo $car->showSpeed();
$car->accelerate(21);
echo '<br>';

echo $car->showSpeed();
$car->stop();
echo '<br>';

echo $car->showSpeed();
$car->go();
echo '<br>';

echo $car->showSpeed();
