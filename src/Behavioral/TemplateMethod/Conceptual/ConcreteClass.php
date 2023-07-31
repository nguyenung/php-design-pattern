<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\TemplateMethod\Conceptual;

class ConcreteClass extends AbstractClass
{
    public function action1()
    {
        echo "ConcreteClass: action1.\n";
    }
    protected function requiredFunction3(): bool
    {
        return true;
    }

    protected function requiredFunction4()
    {
        echo "ConcreteClass: requiredFunction4.\n";
    }
}
