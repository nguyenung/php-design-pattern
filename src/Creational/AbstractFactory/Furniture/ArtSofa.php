<?php

namespace Ungnguyen\PhpDesignPattern\Creational\AbstractFactory\Furniture;

class ArtSofa implements FurnitureInterface
{
    public function sitOn()
    {
        echo "Sit on art sofa.\n";
    }
}
