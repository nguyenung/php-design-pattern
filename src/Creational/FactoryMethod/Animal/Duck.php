<?php

namespace Ungnguyen\PhpDesignPattern\Creational\FactoryMethod\Animal;

class Duck implements AnimalInterface
{

    public function speak()
    {
        echo "Kap Kap\n";
    }
}