<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Flyweight\GameCharacter;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class GameCharacterDemo implements DemoInterface
{
    public static function main(): void
    {
        $factory = new CharacterFactory();
        $player1 = $factory->getCharacer('player');
        $player2 = $factory->getCharacer('player');

        $enemy1 = $factory->getCharacer('enemy');
        $enemy2 = $factory->getCharacer('enemy');

        $player1->render();
        $player2->render();
        $enemy1->render();
        $enemy2->render();
    }
}
