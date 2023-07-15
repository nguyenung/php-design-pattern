<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Decorator\TextFormat;

class DangerousTagFilter extends TextFormatDecorator
{
    protected string $dangerousPatterns = "/<script\b[^>]*>(.*?)<\/script>/is";

    protected array $dangerousAttributes = [
        'onclick', 'onchange', 'onfocus', 'onblur'
    ];

    public function formatText(string $text): string
    {
        $text = parent::formatText($text);
        $cleanString = preg_replace($this->dangerousPatterns, '', $text);
        foreach ($this->dangerousAttributes as $attribute) {
            $pattern = '/\s+' . $attribute . '="[^"]+"/';
            $cleanString = preg_replace($pattern, '', $cleanString);
        }
        return $cleanString;
    }
}
