<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Iterator\BuildInIterator;

use Traversable;

class NumberList implements \IteratorAggregate
{
    private array $numbers;

    public function __construct()
    {
        $this->numbers = [];
    }

    public function addNumber(int $number)
    {
        $this->numbers[] = $number;
    }

    public function getIterator(): Traversable
    {
        return new NumberIterator($this->numbers);
    }
}