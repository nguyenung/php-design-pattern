<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\State\TrafficLight;

class TrafficLightContext
{
    private TrafficLightStateInterface $trafficLightState;

    public function __construct()
    {
        $this->trafficLightState = new RedLightState();
    }

    public function setState(TrafficLightStateInterface $trafficLightState)
    {
        $this->trafficLightState = $trafficLightState;
    }

    public function request()
    {
        $this->trafficLightState->requestHandle();
    }
}
