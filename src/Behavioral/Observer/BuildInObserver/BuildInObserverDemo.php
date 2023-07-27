<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Observer\BuildInObserver;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class BuildInObserverDemo implements DemoInterface
{

    public static function main(): void
    {
        $publisher = new Publisher();
        $subA = new SubscriberA();
        $subB = new SubscriberB();
        $publisher->attach($subA);
        $publisher->attach($subB);

        $publisher->doSomethings();
    }
}
