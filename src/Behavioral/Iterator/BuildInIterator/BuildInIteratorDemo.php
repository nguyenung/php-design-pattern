<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Iterator\BuildInIterator;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class BuildInIteratorDemo implements DemoInterface
{

    public static function main(): void
    {
        $numberList = new NumberList();
        $numberList->addNumber(1);
        $numberList->addNumber(4);
        $numberList->addNumber(98);
        $numberList->addNumber(10);
        $numberList->addNumber(22);
        $iterator = $numberList->getIterator();

        foreach ($iterator as $key => $value) {
            echo "$key => $value\n";
        }
    }
}
