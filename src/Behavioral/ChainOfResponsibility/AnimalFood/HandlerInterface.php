<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\ChainOfResponsibility\AnimalFood;

interface HandlerInterface
{
    public function setNext(HandlerInterface $handler);

    public function handle(string $request);
}
