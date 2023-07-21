<?php

namespace Ungnguyen\PhpDesignPattern\Creational\Builder\HousePlan;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class HousePlanDemo implements DemoInterface
{
    public static function main(): void
    {
        $iglooHouseBuilder = new IglooHouseBuilder();
        $director = new HouseDirector($iglooHouseBuilder);
        $director->constructHouse();
        $house = $director->getHouse();
        $house->show();
    }
}
