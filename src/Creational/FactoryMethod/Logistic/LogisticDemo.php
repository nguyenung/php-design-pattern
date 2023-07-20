<?php

namespace Ungnguyen\PhpDesignPattern\Creational\FactoryMethod\Logistic;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class LogisticDemo implements DemoInterface
{

    public static function main(): void
    {
        $logistic = new Logistic();
        $logistic->createTransport('land');
        $logistic->planDelivery();

        $logistic2 = new Logistic();
        $logistic2->createTransport('sea');
        $logistic2->planDelivery();
    }
}
