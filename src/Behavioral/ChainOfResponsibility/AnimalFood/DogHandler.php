<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\ChainOfResponsibility\AnimalFood;

class DogHandler extends AbstractHandler
{
    public function handle(string $request)
    {
        if ($request == 'Snack') {
            return "Dog: I will eat this.\n";
        }
        return parent::handle($request);
    }
}
