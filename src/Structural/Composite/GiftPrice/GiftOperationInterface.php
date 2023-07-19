<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Composite\GiftPrice;

interface GiftOperationInterface
{
    public function add(GiftBase $gift);

    public function remove(GiftBase $gift);
}
