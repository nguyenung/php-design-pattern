<?php

namespace Ungnguyen\PhpDesignPattern\Creational\FactoryMethod\Animal;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class AnimalDemo implements DemoInterface
{

    public static function main(): void
    {
        $animalFactory = new Animal();
        $cat = $animalFactory->createAnimal('cat');
        $dog = $animalFactory->createAnimal('dog');
        $duck = $animalFactory->createAnimal('duck');

        $cat->speak();
        $dog->speak();
        $duck->speak();
    }
}
