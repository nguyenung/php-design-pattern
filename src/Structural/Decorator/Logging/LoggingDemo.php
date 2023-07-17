<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Decorator\Logging;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class LoggingDemo implements DemoInterface
{
    /**
     * @return void
     */
    public static function main(): void
    {
        $message = "This is log content.";
        $logger = new LoggerConcrete();
        $logger = new LoggerBaseWithTimestamp($logger);
        $logger = new LoggerBaseWithIpAddress($logger);
        $logger->log($message);
    }
}
