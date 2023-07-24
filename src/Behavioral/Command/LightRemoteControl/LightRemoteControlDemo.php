<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Command\LightRemoteControl;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class LightRemoteControlDemo implements DemoInterface
{
    public static function main(): void
    {
        $light = new Light();

        $turnOnCommand = new TurnOnCommand($light);
        $turnOffCommand = new TurnOffCommand($light);

        $remoteControl = new RemoteControl();

        $remoteControl->setCommand($turnOnCommand);
        $remoteControl->pressButton();

        $remoteControl->setCommand($turnOffCommand);
        $remoteControl->pressButton();
    }
}
