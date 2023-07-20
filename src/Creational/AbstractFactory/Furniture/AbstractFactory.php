<?php

namespace Ungnguyen\PhpDesignPattern\Creational\AbstractFactory\Furniture;

abstract class AbstractFactory
{
    abstract public function createChair();

    abstract public function createSofa();
}
