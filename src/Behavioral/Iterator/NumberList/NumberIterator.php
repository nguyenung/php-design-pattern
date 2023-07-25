<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Iterator\NumberList;

class NumberIterator implements IteratorInterface
{

    /**
     * @var array|int[] $number
     */
    private array $numbers;
    private int $index;
    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
        $this->index = 0;
    }

    public function getNext()
    {
        if ($this->hasMore()) {
            $num = $this->numbers[$this->index];
            $this->index ++;
            return $num;
        }
        return null;
    }

    public function hasMore()
    {
        return $this->index < count($this->numbers);
    }
}
