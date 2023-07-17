<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Adapter\PegAndHole;

class RoundPeg implements RoundInterface
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
}
