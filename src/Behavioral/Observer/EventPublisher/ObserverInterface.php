<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Observer\EventPublisher;

interface ObserverInterface
{
    public function update(PublisherInterface $publisher);
}
