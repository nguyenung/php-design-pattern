<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Iterator\NumberList;

class NumberList implements AggregateInterface
{
    private array $numberList;

    public function __construct()
    {
        $this->numberList = [];
    }

    public function addItem($number)
    {
        $this->numberList[] = $number;
    }

    public function createIterator(): IteratorInterface
    {
        return new NumberIterator($this->numberList);
    }
}
