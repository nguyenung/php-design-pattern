<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Decorator\TextFormat;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class TextFormatDemo implements DemoInterface
{
    /**
     * @return void
     */
    public static function main(): void
    {
        $text = '<div onclick="xxx">onclick="abc"</div>
        <a onclick="yyy">onclick="xyz"</a>
        <script>alert("1111");</script>
        <b>This is <i>text</i> content.</b>';

        $formatter = new TextFormatConcrete();

        $dangerousTagFilter = new DangerousTagFilter($formatter);

        $plainTextFilter = new PlainTextFilter($dangerousTagFilter);

        var_dump($plainTextFilter->formatText($text));
    }
}
