<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Strategy\ControlTrafficLight;

class NormalTrafficLightStrategy implements TrafficLightStrategyInterface
{
    public function controlTrafficLight()
    {
        echo "Normal traffic light\n";
    }
}
