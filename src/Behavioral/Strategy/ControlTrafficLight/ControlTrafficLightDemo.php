<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Strategy\ControlTrafficLight;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class ControlTrafficLightDemo implements DemoInterface
{
    public static function main(): void
    {
        $context = new TrafficLightContext();
        $strategyNormal = new NormalTrafficLightStrategy();
        $strategyEmergency = new EmergencyTrafficLightStrategy();

        $context->setTrafficLightStrategy($strategyNormal);
        $context->controlTrafficLight();

        $context->setTrafficLightStrategy($strategyEmergency);
        $context->controlTrafficLight();
    }
}
