<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Decorator\Logging;

class LoggerBaseWithIpAddress extends LoggerBaseDecorator
{
    public function log(string $message): void
    {
        $ip = '127.0.0.1';
        $logMessage = "[$ip]$message";
        $this->component->log($logMessage);
    }
}
