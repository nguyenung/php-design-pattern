<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Iterator\BuildInIterator;

class NumberIterator implements \Iterator
{
    private array $numberList;
    private int $index;
    public function __construct($numbers)
    {
        $this->numberList = $numbers;
        $this->index = 0;
    }

    public function current(): mixed
    {
        return $this->numberList[$this->index];
    }

    public function next(): void
    {
        $this->index++;
    }

    public function key(): mixed
    {
        return $this->index;
    }

    public function valid(): bool
    {
        return isset($this->numberList[$this->index]);
    }

    public function rewind(): void
    {
        $this->index = 0;
    }
}
