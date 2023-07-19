<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Bridge\RemoteControl;

class AdvanceRemoteControl extends RemoteControl
{
    public function mute()
    {
        $this->device->setVolume(0);
        echo "Device is muted.\n";
    }
}
