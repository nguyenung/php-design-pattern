<?php

namespace Ungnguyen\PhpDesignPattern\Creational\Singleton\SingletonDeclare;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class SingletonDeclareDemo implements DemoInterface
{

    public static function main(): void
    {
        Logger::log('Hello');

        $logger1 = Logger::getInstance();
        $logger2 = Logger::getInstance();
        var_dump($logger1 === $logger2);
    }
}
