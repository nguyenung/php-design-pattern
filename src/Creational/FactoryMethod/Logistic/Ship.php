<?php

namespace Ungnguyen\PhpDesignPattern\Creational\FactoryMethod\Logistic;

class Ship implements TransportInterface
{

    public function deliver()
    {
        echo "Delivery by ship.\n";
    }
}
