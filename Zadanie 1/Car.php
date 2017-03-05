<?php

// including necessary class or interfaces
include_once 'Motor.php';
include_once 'Movement.php';
include_once 'Dashboard.php';


// Car inherit from abstract class mMtor and implements two interfaces: Dashboard, Movement
class Car extends Motor implements Movement, Dashboard
{
    // few necessary attributes
    private $car_make;
    private $car_model;
    // default speed for car is 0
    private $speed = 0;

    // to create Car object we need to pass to constructor car make and car model
    function __construct($car_make, $car_model)
    {
        // setting car make and model
        $this->car_make = $car_make;
        $this->car_model = $car_model;
    }

    // only getter's - we don't want to set make or model once created car
    public function getCarMake()
    {
        return $this->car_make;
    }

    public function getCarModel()
    {
        return $this->car_model;
    }

    // from Dashboard interface
    public function showSpeed()
    {
        return $this->speed;
    }

    // from Dashboard interface
    public function showFuelConsumption()
    {
        return $this->fuel_consumption;
    }

    // from abstract class - Motor
    public function setFuelConsumption($fuel_consumption)
    {
        $this->fuel_consumption = $fuel_consumption;
    }

    // from abstract class - Motor
    public function getEngineCapacity()
    {
        return $this->engine_capacity;
    }

    // from abstract class - Motor
    public function setEngineCapacity($engine_capacity)
    {
        $this->engine_capacity = $engine_capacity;
    }

    // from Movement interface
    public function go()
    {
        $this->speed = 30;
    }

    // from Movement interface
    public function stop()
    {
        $this->speed = 0;
    }

    // from Movement interface
    public function accelerate($velocity)
    {
        $this->speed += $velocity;
    }

    // from Movement interface
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