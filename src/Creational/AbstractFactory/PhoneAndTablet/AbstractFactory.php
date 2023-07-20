<?php

namespace Ungnguyen\PhpDesignPattern\Creational\AbstractFactory\PhoneAndTablet;

abstract class AbstractFactory
{
    abstract public function createPhone();

    abstract public function createTablet();
}
