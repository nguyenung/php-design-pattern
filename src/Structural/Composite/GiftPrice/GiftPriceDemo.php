<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Composite\GiftPrice;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class GiftPriceDemo implements DemoInterface
{
    public static function main(): void
    {
        $carGift = new SingleGift('Car', 10);
        $carGift->calculatePrice();

        echo "\n--------------------------------\n";

        $dollGift = new SingleGift('Doll', 20);
        $rootBox = new CompositeGift('Root Box', 0);
        $rootBox->add($carGift);
        $rootBox->add($dollGift);

        $phone = new SingleGift('Phone', 50);
        $childBox = new CompositeGift('Child Box', 0);
        $childBox->add($phone);
        $childBox->add($dollGift);

        $rootBox->add($childBox);

        $rootBox->calculatePrice();
    }
}
