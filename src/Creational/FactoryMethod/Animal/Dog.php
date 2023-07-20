<?php

namespace Ungnguyen\PhpDesignPattern\Creational\FactoryMethod\Animal;

class Dog implements AnimalInterface
{

    public function speak()
    {
        echo "Goo Goo\n";
    }
}
