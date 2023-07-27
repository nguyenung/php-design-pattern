<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\State\TrafficLight;

class GreenLightState implements TrafficLightStateInterface
{
    public function requestHandle()
    {
        echo "Green light is on\n";
    }
}
