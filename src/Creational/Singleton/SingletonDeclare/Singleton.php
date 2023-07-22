<?php

namespace Ungnguyen\PhpDesignPattern\Creational\Singleton\SingletonDeclare;

class Singleton
{
    private static $instances;
    protected function __construct()
    {
    }

    public function __clone(): void
    {
    }

    public function __wakeup(): void
    {
        throw new \Exception('Cannot unserialize Singleton.');
    }

    public static function getInstance()
    {
        $subclass = static::class;
        if (!isset(self::$instances[$subclass])) {
            self::$instances[$subclass] = new static();
        }
        return self::$instances[$subclass];
    }
}
