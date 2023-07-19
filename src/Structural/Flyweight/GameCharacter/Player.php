<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Flyweight\GameCharacter;

class Player extends BaseCharacter implements CharacterInterface
{

    public function render()
    {
        echo "Render player {$this->name}\n";
    }
}
