<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\State\TrafficLight;

class YellowLightState implements TrafficLightStateInterface
{
    public function requestHandle()
    {
        echo "Red light is on\n";
    }
}
