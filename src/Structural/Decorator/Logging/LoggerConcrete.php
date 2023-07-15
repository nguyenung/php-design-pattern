<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Decorator\Logging;

class LoggerConcrete implements LoggerInterface
{
    public function log(string $message): void
    {
        file_put_contents('.data/log.txt', $message, FILE_APPEND);
    }
}
