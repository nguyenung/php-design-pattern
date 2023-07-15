<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Decorator\TextFormat;

class PlainTextFilter extends TextFormatDecorator
{
    public function formatText(string $text): string
    {
        $text = parent::formatText($text);
        return strip_tags($text);
    }
}
