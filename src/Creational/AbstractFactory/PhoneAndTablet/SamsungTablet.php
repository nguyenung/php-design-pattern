<?php

namespace Ungnguyen\PhpDesignPattern\Creational\AbstractFactory\PhoneAndTablet;

class SamsungTablet implements TabletInterface
{

    public function playGame()
    {
        echo "Play game with Samsung tablet.\n";
    }
}
