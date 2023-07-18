<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Bridge\ImageImplementor;

class PngImplementor implements ImageImplementorInterface
{

    public function showImage(): void
    {
        echo "Show png image.\n";
    }
}
