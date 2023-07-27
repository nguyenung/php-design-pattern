<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Observer\BuildInObserver;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class Publisher implements SplSubject
{
    private $state;
    
    /** @var SplObjectStorage $observers */
    private SplObjectStorage $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer): void
    {
        echo "Publisher: attach an observer\n";
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        echo "Publisher: detach an observer\n";
        $this->observers->detach($observer);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function doSomethings()
    {
        echo "Publisher: I do something important.\n";
        $this->state = rand(0, 10);
        echo "Publisher: My state changed to: " . $this->state . "\n";
        $this->notify();
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }
}
