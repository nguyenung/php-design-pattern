<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Observer\EventPublisher;

class ObserverB implements ObserverInterface
{

    public function update(PublisherInterface $publisher)
    {
        echo "ObserverB: react event \"{$publisher->getEventName()}\"\n";
    }
}
