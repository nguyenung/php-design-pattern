<?php

namespace Ungnguyen\PhpDesignPattern\Creational\AbstractFactory\PhoneAndTablet;

class Iphone implements PhoneInterface
{
    public function makeCall()
    {
        echo "Make a call with Iphone.\n";
    }
}
