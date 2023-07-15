<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Decorator\TextFormat;

class TextFormatDecorator implements TextFormatInterface
{
    protected TextFormatInterface $component;

    public function __construct(TextFormatInterface $component)
    {
        $this->component = $component;
    }

    public function formatText(string $text): string
    {
        return $this->component->formatText($text);
    }
}
