<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Flyweight\GameCharacter;

abstract class BaseCharacter
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
