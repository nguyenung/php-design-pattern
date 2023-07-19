<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Flyweight\GameCharacter;

class CharacterFactory
{
    private array $characters = [];

    public function getCharacer($key)
    {
        if (!isset($this->characters[$key])) {
            $this->characters[$key] = match ($key) {
                'player' => new Player('Player demo'),
                'enemy' => new Player('Enemy demo'),
                default => throw new \InvalidArgumentException('Unknown character'),
            };
        }
        return $this->characters[$key];
    }
}
