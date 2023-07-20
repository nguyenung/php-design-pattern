<?php

namespace Ungnguyen\PhpDesignPattern\Creational\FactoryMethod\Logistic;

class Logistic
{
    protected TransportInterface $transport;
    public function createTransport(string $type)
    {
        $this->transport = match ($type) {
            'land' => new Truck(),
            'sea' => new Ship(),
            default => throw new \InvalidArgumentException('Unknown transport type'),
        };
    }

    public function planDelivery()
    {
        $this->transport->deliver();
    }
}
