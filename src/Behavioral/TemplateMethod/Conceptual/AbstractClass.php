<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\TemplateMethod\Conceptual;

abstract class AbstractClass
{
    final public function templateMethod() {
        $this->action1();
        if ($this->requiredFunction3()) {
            $this->action2();
        }
        $this->requiredFunction4();
    }

    protected function action1()
    {
        echo "AbstractClass: action1\n";
    }

    protected function action2()
    {
        echo "AbstractClass: action2\n";
    }

    abstract protected function requiredFunction3(): bool;

    abstract protected function requiredFunction4();
}
