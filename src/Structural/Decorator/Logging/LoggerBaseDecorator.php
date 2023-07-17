<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Decorator\Logging;

class LoggerBaseDecorator implements LoggerInterface
{
    protected LoggerInterface $component;

    public function __construct(LoggerInterface $component)
    {
        $this->component = $component;
    }

    public function log(string $message): void
    {
        $this->component->log($message);
    }
}
