<?php


interface Movement
{
    // set start speed for car
    public function go();

    // stop car
    public function stop();

    // accelerate car by given speed
    public function accelerate($speed);

    // slow down car by given speed
    public function slowdown($speed);

}