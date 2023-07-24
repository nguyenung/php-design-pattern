<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\ChainOfResponsibility\AnimalFood;

class AbstractHandler implements HandlerInterface
{
    private $nextHandler;

    public function setNext(HandlerInterface $handler)
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handle(string $request)
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }
        return null;
    }
}
