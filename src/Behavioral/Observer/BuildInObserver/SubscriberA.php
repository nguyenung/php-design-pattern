<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Observer\BuildInObserver;

use SplSubject;

class SubscriberA implements \SplObserver
{

    public function update(SplSubject $subject): void
    {
        if ($subject->getState() < 5) {
            echo "SubscriberA: Reacted to the event.\n";
        }
    }
}
