<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Bridge\ImageImplementor;

class JpgImplementor implements ImageImplementorInterface
{

    public function showImage(): void
    {
        echo "Show jpg image.\n";
    }
}
