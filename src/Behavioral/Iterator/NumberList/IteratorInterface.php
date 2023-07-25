<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Iterator\NumberList;

interface IteratorInterface
{
    public function getNext();

    public function hasMore();
}
