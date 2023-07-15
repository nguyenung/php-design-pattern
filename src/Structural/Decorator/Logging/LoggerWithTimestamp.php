<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Decorator\Logging;

class LoggerWithTimestamp extends LoggerDecorator
{
    public function log(string $message): void
    {
        $timestamp = date('Y-m-d H:i:s');
        $logMessage = "[$timestamp]$message";
        $this->component->log($logMessage);
    }
}
