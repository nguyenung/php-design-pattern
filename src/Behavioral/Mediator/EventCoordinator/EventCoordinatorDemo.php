<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Mediator\EventCoordinator;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class EventCoordinatorDemo implements DemoInterface
{
    public static function main(): void
    {
        $subscriber1 = new Subscriber('John Smith');
        $subscriber2 = new Subscriber('Anna Lee');
        $subscriber3 = new Subscriber('Taylor Jones');
        $eventCoordinator = new EventCoordinator();
        $eventCoordinator->addSubscriber($subscriber1);
        $eventCoordinator->addSubscriber($subscriber2);
        $eventCoordinator->addSubscriber($subscriber3);

        $eventCoordinator->notify('Meeting 2PM tomorrow.');
    }
}
