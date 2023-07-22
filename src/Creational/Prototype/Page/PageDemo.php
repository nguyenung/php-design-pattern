<?php

namespace Ungnguyen\PhpDesignPattern\Creational\Prototype\Page;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class PageDemo implements DemoInterface
{

    public static function main(): void
    {
        $author = new Author('John Doe');
        $originalPage = new Page('My page title', 'My page body', $author);
        $originalPage->addComment('Comment from original.');
        $originalPage->addComment('Comment from original 2.');

        echo "+++++++ Original page:\n";
        $originalPage->showDetail();

        $copyPage = clone $originalPage;
        $copyPage->addComment('Hello from copy page');

        echo "+++++++ Copied page:\n";
        $copyPage->showDetail();
    }
}
