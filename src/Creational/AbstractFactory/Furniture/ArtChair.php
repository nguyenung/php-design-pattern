<?php

namespace Ungnguyen\PhpDesignPattern\Creational\AbstractFactory\Furniture;

class ArtChair implements FurnitureInterface
{
    public function sitOn()
    {
        echo "Sit on art chair.\n";
    }
}
