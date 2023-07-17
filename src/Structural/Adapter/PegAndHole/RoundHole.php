<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Adapter\PegAndHole;

class RoundHole implements RoundInterface
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function gerRadius(): float
    {
        return $this->radius;
    }

    public function isFit(RoundInterface $peg): bool
    {
        return $peg->gerRadius() <= $this->gerRadius();
    }
}
