<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\State\TrafficLight;

class RedLightState implements TrafficLightStateInterface
{
    public function requestHandle()
    {
        echo "Yellow light is on\n";
    }
}
