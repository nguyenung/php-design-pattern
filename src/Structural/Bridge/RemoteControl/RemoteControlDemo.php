<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Bridge\RemoteControl;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class RemoteControlDemo implements DemoInterface
{
    public static function main(): void
    {
        $radio = new RadioDevice();
        $tv = new TvDevice();

        $radioRemoteControl = new RemoteControl($radio);
        $radioRemoteControl->volumeUp();
        $radioRemoteControl->togglePower();
        $radioRemoteControl->togglePower();

        echo "------------------------------------------\n";

        $tvRemoteControl = new AdvanceRemoteControl($tv);
        $tvRemoteControl->mute();
    }
}
