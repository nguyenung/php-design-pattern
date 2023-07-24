<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\ChainOfResponsibility\AnimalFood;

class MonkeyHandler extends AbstractHandler
{
    public function handle(string $request)
    {
        if ($request == 'Banana') {
            return "Monkey: I will eat this.\n";
        }
        return parent::handle($request);
    }
}
