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
        $logger1 = new LoggerWithTimestamp($logger);
        $logger2 = new LoggerWithIpAddress($logger1);
        $logger2->log($message);
    }
}
