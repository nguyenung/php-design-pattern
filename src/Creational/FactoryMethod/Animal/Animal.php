<?php

namespace Ungnguyen\PhpDesignPattern\Creational\FactoryMethod\Animal;

class Animal
{
    public function createAnimal(string $type)
    {
        return match($type) {
            'cat' => new Cat(),
            'dog' => new Dog(),
            'duck' => new Duck(),
        };
    }
}
