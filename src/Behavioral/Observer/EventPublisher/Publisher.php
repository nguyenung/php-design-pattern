<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Observer\EventPublisher;

class Publisher implements PublisherInterface
{
    /** @var array|ObserverInterface[] $observers */
    private $observers;
    private string $eventName;
    public function __construct()
    {
        $this->observers = [];
    }

    public function attach(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(ObserverInterface $observer)
    {
        $index = array_search($observer, $this->observers);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * @return string
     */
    public function getEventName(): string
    {
        return $this->eventName;
    }

    public function mainLogic()
    {
        $this->eventName = 'New version updated successfully!';
        $this->notify();
    }
}
