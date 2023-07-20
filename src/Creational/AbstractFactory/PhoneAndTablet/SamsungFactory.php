<?php

namespace Ungnguyen\PhpDesignPattern\Creational\AbstractFactory\PhoneAndTablet;

class SamsungFactory
{
    public function createPhone()
    {
        return new SamsungPhone();
    }

    public function createTablet()
    {
        return new SamsungTablet();
    }
}
