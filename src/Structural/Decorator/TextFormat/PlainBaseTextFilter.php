<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Decorator\TextFormat;

class PlainBaseTextFilter extends TextFormatBaseDecorator
{
    public function formatText(string $text): string
    {
        $text = parent::formatText($text);
        return strip_tags($text);
    }
}
