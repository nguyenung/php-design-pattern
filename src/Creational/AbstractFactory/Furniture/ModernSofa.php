<?php

namespace Ungnguyen\PhpDesignPattern\Creational\AbstractFactory\Furniture;

class ModernSofa implements FurnitureInterface
{
    public function sitOn()
    {
        echo "Sit on modern sofa.\n";
    }
}
