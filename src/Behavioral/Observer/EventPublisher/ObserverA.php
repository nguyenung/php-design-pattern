<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Observer\EventPublisher;

class ObserverA implements ObserverInterface
{

    public function update(PublisherInterface $publisher)
    {
        echo "ObserverA: react event \"{$publisher->getEventName()}\"\n";
    }
}
