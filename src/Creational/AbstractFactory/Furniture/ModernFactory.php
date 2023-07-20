<?php

namespace Ungnguyen\PhpDesignPattern\Creational\AbstractFactory\Furniture;

class ModernFactory extends AbstractFactory
{

    public function createChair()
    {
        return new ModernChair();
    }

    public function createSofa()
    {
        return new ModernSofa();
    }
}
