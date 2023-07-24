<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\ChainOfResponsibility\Middleware;

interface MiddlewareInterface
{
    public function linkWith(MiddlewareInterface $middleware);

    public function check(string $email, string $password): bool;
}
