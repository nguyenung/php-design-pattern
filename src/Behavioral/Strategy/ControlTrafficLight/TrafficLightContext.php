<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Strategy\ControlTrafficLight;

class TrafficLightContext
{
    private TrafficLightStrategyInterface $trafficLightStrategy;

    /**
     * @param TrafficLightStrategyInterface $trafficLightStrategy
     */
    public function setTrafficLightStrategy(TrafficLightStrategyInterface $trafficLightStrategy): void
    {
        $this->trafficLightStrategy = $trafficLightStrategy;
    }

    public function controlTrafficLight()
    {
        $this->trafficLightStrategy->controlTrafficLight();
    }
}
