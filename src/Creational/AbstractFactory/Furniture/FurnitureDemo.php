<?php

namespace Ungnguyen\PhpDesignPattern\Creational\AbstractFactory\Furniture;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class FurnitureDemo implements DemoInterface
{
    public static function main(): void
    {
        $modernFactory = new ModernFactory();
        $artFactory = new ArtFactory();

        $modernChair = $modernFactory->createChair();
        $modernChair->sitOn();
        $modernSofa = $modernFactory->createSofa();
        $modernSofa->sitOn();

        echo "================================================\n";
        $artChair = $artFactory->createChair();
        $artSofa = $artFactory->createSofa();
        $artChair->sitOn();
        $artSofa->sitOn();
    }
}
