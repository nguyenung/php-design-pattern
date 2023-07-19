<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Composite\GiftPrice;

class CompositeGift extends GiftBase implements GiftOperationInterface
{
    private array $gifts = [];

    public function add(GiftBase $gift)
    {
        $this->gifts[] = $gift;
    }

    public function remove(GiftBase $gift)
    {
        // TODO: Implement remove() method.
    }

    /**
     * @return mixed
     */
    public function calculatePrice()
    {
        $price = 0;
        foreach ($this->gifts as $gift) {
            $price += $gift->calculatePrice();
        }
        echo "Price of {$this->name} is {$price}\n";
        return $price;
    }
}
