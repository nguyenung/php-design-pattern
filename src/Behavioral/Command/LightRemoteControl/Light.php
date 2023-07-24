<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Command\LightRemoteControl;

class Light
{
    public function turnOn()
    {
        echo "The light is ON\n";
    }

    public function turnOff()
    {
        echo "The light is OFF\n";
    }
}
