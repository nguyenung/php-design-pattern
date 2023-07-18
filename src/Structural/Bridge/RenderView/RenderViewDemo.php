<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Bridge\RenderView;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class RenderViewDemo implements DemoInterface
{

    public static function main(): void
    {
        $htmlRenderer = new HtmlRenderer();
        $jsonRenderer = new JsonRenderer();

        $htmlPage = new SimplePage($htmlRenderer, 'Hello world', 'This is Bridge pattern.');
        echo $htmlPage->view();
        echo "\n--------------------------------\n";
        $htmlPage->changeRenderer($jsonRenderer);
        echo $htmlPage->view();

        echo "\n--------------------------------\n";
        $product = new Product('Laptop', 'Very nice', 'PRODUCT_URL', 'PRODUCT_IMG_URL');
        $productPage = new ProductPage($htmlRenderer, $product);
        echo $productPage->view();
        echo "\n--------------------------------\n";
        $productPage->changeRenderer($jsonRenderer);
        echo $productPage->view();
    }
}
