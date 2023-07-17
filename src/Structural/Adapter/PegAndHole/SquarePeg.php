<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Adapter\PegAndHole;

class SquarePeg implements SquareInterface
{
    private float $width;

    public function __construct(float $width)
    {
        $this->width = $width;
    }
    public function getWidth(): float
    {
        return $this->width;
    }
}
