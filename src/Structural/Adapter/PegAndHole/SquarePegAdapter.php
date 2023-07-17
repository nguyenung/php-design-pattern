<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Adapter\PegAndHole;

class SquarePegAdapter implements RoundInterface
{
    private SquareInterface $squarePeg;

    public function __construct(SquareInterface $squarePeg)
    {
        $this->squarePeg = $squarePeg;
    }

    public function gerRadius(): float
    {
        return $this->squarePeg->getWidth() * sqrt(2) / 2;
    }
}
