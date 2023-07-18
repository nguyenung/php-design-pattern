<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Bridge\ImageImplementor;

class JpgImage extends Image
{
    public function show(): void
    {
        $this->imageImplementor->showImage();
        echo "In jpg format.\n";
    }
}
