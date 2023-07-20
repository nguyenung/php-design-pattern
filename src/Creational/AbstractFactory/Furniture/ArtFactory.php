<?php

namespace Ungnguyen\PhpDesignPattern\Creational\AbstractFactory\Furniture;

class ArtFactory extends AbstractFactory
{

    public function createChair()
    {
        return new ArtChair();
    }

    public function createSofa()
    {
        return new ArtSofa();
    }
}
