<?php


abstract class Motor
{
    protected $engine_capacity;
    
    protected $fuel_consumption;

    abstract protected function setFuelConsumption($fuel_consumption);

    abstract protected function setEngineCapacity($engine_capacity);

    abstract protected function getEngineCapacity();
}
