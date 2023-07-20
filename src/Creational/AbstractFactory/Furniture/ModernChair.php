<?php

namespace Ungnguyen\PhpDesignPattern\Creational\AbstractFactory\Furniture;

class ModernChair implements FurnitureInterface
{
    public function sitOn()
    {
        echo "Sit on modern chair.\n";
    }
}
