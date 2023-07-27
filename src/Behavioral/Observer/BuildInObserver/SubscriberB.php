<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Observer\BuildInObserver;

use SplSubject;

class SubscriberB implements \SplObserver
{

    public function update(SplSubject $subject): void
    {
        if ($subject->getState() > 5) {
            echo "SubscriberB: Reacted to the event.\n";
        }
    }
}
