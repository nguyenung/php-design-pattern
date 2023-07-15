<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Decorator\Logging;

interface LoggerInterface
{
    public function log(string $message): void;
}
