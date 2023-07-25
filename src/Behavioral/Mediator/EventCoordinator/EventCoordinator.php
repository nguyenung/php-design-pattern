<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Mediator\EventCoordinator;

class EventCoordinator implements EventCoordinatorInterface
{
    /** @var array|Subscriber[] $subscribers */
    private array $subscribers;
    public function addSubscriber(Subscriber $subscriber)
    {
        $this->subscribers[] = $subscriber;
    }

    public function notify(string $event)
    {
        foreach ($this->subscribers as $subscriber) {
            $subscriber->listen($event);
        }
    }
}
