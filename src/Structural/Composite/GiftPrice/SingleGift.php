<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Composite\GiftPrice;

class SingleGift extends GiftBase
{

    public function calculatePrice()
    {
        echo "Price of single product {$this->name} is {$this->price}\n";
        return $this->price;
    }
}
