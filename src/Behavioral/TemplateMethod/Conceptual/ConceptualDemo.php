<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\TemplateMethod\Conceptual;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class ConceptualDemo implements DemoInterface
{
    public static function main(): void
    {
        $concrete = new ConcreteClass();
        $concrete->templateMethod();
    }
}
