<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Mediator\EventCoordinator;

class Subscriber
{
    private string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function listen(string $event)
    {
        echo "[$this->name]: received \"$event\"\n";
    }
}
