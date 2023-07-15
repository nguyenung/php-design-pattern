<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Decorator\TextFormat;

class TextFormatConcrete implements TextFormatInterface
{
    public function formatText(string $text): string
    {
        return $text;
    }
}
