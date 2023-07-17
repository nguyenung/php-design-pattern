<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Adapter\PegAndHole;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class PegAndHoleDemo implements DemoInterface
{
    public static function main(): void
    {
        $hole = new RoundHole(11);

        $roundPeg = new RoundPeg(10);
        $roundPeg2 = new RoundPeg(15);
        var_dump($hole->isFit($roundPeg));
        var_dump($hole->isFit($roundPeg2));

        $squarePeg = new SquarePeg(10);
        $squarePeg2 = new SquarePeg(17);
        $squarePegAdapter = new SquarePegAdapter($squarePeg);
        var_dump($hole->isFit($squarePegAdapter));

        $squarePegAdapter2 = new SquarePegAdapter($squarePeg2);
        var_dump($hole->isFit($squarePegAdapter2));
    }
}
