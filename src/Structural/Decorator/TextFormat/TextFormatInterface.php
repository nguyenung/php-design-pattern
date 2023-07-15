<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Decorator\TextFormat;

interface TextFormatInterface
{
    public function formatText(string $text): string;
}
