<?php

namespace Ungnguyen\PhpDesignPattern\Creational\Singleton\SingletonDeclare;

class Logger extends Singleton
{
    public function writeLog($message)
    {
        echo "Log message: {$message}\n";
    }
    public static function log($message)
    {
        $instance = static::getInstance();
        $instance->writeLog($message);
    }
}
