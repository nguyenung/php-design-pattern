<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Decorator\Logging;

class LoggerBaseWithTimestamp extends LoggerBaseDecorator
{
    public function log(string $message): void
    {
        $timestamp = date('Y-m-d H:i:s');
        $logMessage = "[$timestamp]$message";
        $this->component->log($logMessage);
    }
}
