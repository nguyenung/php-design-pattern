<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Bridge\RemoteControl;

class RemoteControl
{
    protected DeviceInterface $device;

    public function __construct(DeviceInterface $device)
    {
        $this->device = $device;
    }

    public function volumeUp()
    {
        $this->device->setVolume($this->device->getVolume() + 1);
        echo "Volume is up.\n";
    }

    public function volumeDown()
    {
        $this->device->setVolume($this->device->getVolume() - 1);
        echo "Volume is down.\n";
    }

    public function togglePower()
    {
        if ($this->device->isEnable()) {
            $this->device->disable();
            echo "Power is off.\n";
        } else {
            $this->device->enable();
            echo "Power is on.\n";
        }
    }
}
