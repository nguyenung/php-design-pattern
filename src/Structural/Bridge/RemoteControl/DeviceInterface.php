<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Bridge\RemoteControl;

interface DeviceInterface
{
    public function isEnable();

    public function enable();

    public function disable();

    public function getVolume();

    public function setVolume($value);
}
