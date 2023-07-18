<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Bridge\ImageImplementor;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class ImageImplementorDemo implements DemoInterface
{
    public static function main(): void
    {
        $pngImplementor = new PngImplementor();
        $ipgImplementor = new JpgImplementor();

        $png = new PngImage($pngImplementor);
        $jpg = new JpgImage($ipgImplementor);

        $png->show();
        echo "--------------------------------\n";
        $jpg->show();
    }
}
