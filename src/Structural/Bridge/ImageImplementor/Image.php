<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Bridge\ImageImplementor;

abstract class Image
{
    protected ImageImplementorInterface $imageImplementor;

    public function __construct(ImageImplementorInterface $imageImplementor)
    {
        $this->imageImplementor = $imageImplementor;
    }

    abstract public function show(): void;
}
