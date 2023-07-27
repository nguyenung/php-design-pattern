<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Observer\EventPublisher;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class EventPublisherDemo implements DemoInterface
{

    public static function main(): void
    {
        $publisher = new Publisher();
        $publisher->attach(new ObserverA());
        $publisher->attach(new ObserverB());
        $publisher->mainLogic();
    }
}
