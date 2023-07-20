<?php

namespace Ungnguyen\PhpDesignPattern\Creational\AbstractFactory\PhoneAndTablet;

class AppleFactory
{
    public function createPhone(): PhoneInterface
    {
        return new Iphone();
    }

    public function createTablet(): TabletInterface
    {
        return new Ipad();
    }
}
