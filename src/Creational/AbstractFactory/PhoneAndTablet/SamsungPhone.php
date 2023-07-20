<?php

namespace Ungnguyen\PhpDesignPattern\Creational\AbstractFactory\PhoneAndTablet;

class SamsungPhone implements PhoneInterface
{
    public function makeCall()
    {
        echo "Make a call with Samsung phone.\n";
    }
}
