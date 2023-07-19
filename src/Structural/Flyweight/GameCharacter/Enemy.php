<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Flyweight\GameCharacter;

class Enemy extends BaseCharacter implements CharacterInterface
{

    public function render()
    {
        echo "Render enemy {$this->name}\n";
    }
}
