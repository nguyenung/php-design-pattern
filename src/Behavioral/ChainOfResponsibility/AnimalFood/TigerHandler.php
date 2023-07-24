<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\ChainOfResponsibility\AnimalFood;

class TigerHandler extends AbstractHandler
{
    public function handle(string $request)
    {
        if ($request == 'Meat') {
            return "Tiger: I will eat this.\n";
        }
        return parent::handle($request);
    }
}
