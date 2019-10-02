<?php


interface Movement
{
    public function go();

    public function stop();

    public function accelerate($speed);
    
    public function slowdown($speed);
}
