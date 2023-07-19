<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Composite\GiftPrice;

abstract class GiftBase
{
    protected $price;

    protected $name;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    abstract public function calculatePrice();
}
