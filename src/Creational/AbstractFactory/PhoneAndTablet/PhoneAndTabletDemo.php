<?php

namespace Ungnguyen\PhpDesignPattern\Creational\AbstractFactory\PhoneAndTablet;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class PhoneAndTabletDemo implements DemoInterface
{
    public static function main(): void
    {
        $appleFactory = new AppleFactory();
        $applePhone = $appleFactory->createPhone();
        $appleTablet = $appleFactory->createTablet();
        $applePhone->makeCall();
        $appleTablet->playGame();

        echo "-----------------------------------------------------------\n";

        $samsungFactory = new SamsungFactory();
        $samsungPhone = $samsungFactory->createPhone();
        $samsungTablet = $samsungFactory->createTablet();
        $samsungPhone->makeCall();
        $samsungTablet->playGame();
    }
}
