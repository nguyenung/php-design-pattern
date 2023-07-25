<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Mediator\EventCoordinator;

interface EventCoordinatorInterface
{
    public function addSubscriber(Subscriber $subscriber);
    public function notify(string $event);
}
