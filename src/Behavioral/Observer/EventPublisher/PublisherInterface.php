<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Observer\EventPublisher;

interface PublisherInterface
{
    public function attach(ObserverInterface $observer);
    public function detach(ObserverInterface $observer);
    public function notify();
}
