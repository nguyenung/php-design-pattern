<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Command\LightRemoteControl;

class TurnOnCommand implements CommandInterface
{
    private Light $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->turnOn();
    }
}
