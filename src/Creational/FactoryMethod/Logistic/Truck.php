<?php

namespace Ungnguyen\PhpDesignPattern\Creational\FactoryMethod\Logistic;

class Truck implements TransportInterface
{

    public function deliver()
    {
        echo "Delivery by truck.\n";
    }
}
