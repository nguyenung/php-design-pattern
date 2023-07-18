<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Bridge\ImageImplementor;

class PngImage extends Image
{
    public function show(): void
    {
        $this->imageImplementor->showImage();
        echo "In png format.\n";
    }
}
