<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Iterator\NumberList;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class NumberListDemo implements DemoInterface
{

    public static function main(): void
    {
        $numberList = new NumberList();
        $numberList->addItem(1);
        $numberList->addItem(15);
        $numberList->addItem(21);
        $numberList->addItem(189);
        $iterator = $numberList->createIterator();

        while ($iterator->hasMore()) {
            echo $iterator->getNext() . "\n";
        }
    }
}
