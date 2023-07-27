<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Strategy\ControlTrafficLight;

class EmergencyTrafficLightStrategy implements TrafficLightStrategyInterface
{
    public function controlTrafficLight()
    {
        echo "Emergency traffic light\n";
    }
}
