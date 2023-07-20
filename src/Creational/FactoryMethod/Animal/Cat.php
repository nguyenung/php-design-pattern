<?php

namespace Ungnguyen\PhpDesignPattern\Creational\FactoryMethod\Animal;

class Cat implements AnimalInterface
{

    public function speak()
    {
        echo "Mew Mew\n";
    }
}
