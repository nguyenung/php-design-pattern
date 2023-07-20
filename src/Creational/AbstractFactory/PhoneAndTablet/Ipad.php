<?php

namespace Ungnguyen\PhpDesignPattern\Creational\AbstractFactory\PhoneAndTablet;

class Ipad implements TabletInterface
{

    public function playGame()
    {
        echo "Play game with Ipad.\n";
    }
}
