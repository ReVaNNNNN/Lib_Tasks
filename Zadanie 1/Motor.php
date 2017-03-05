<?php


abstract class Motor
{
    // 2 attributes - describing motor
    protected $engine_capacity;
    protected $fuel_consumption;

    // setting fuel consumption for motor
    abstract protected function setFuelConsumption($fuel_consumption);

    // setting engine capacity for motor
    abstract protected function setEngineCapacity($engine_capacity);

    // showing engine capacity for motor
    abstract protected function getEngineCapacity();


}