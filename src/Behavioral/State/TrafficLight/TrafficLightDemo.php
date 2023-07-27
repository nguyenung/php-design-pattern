<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\State\TrafficLight;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class TrafficLightDemo implements DemoInterface
{
    public static function main(): void
    {
        $context = new TrafficLightContext();
        $context->request();

        $context->setState(new YellowLightState());
        $context->request();

        $context->setState(new GreenLightState());
        $context->request();
    }
}
