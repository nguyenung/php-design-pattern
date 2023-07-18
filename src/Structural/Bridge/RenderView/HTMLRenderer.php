<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Bridge\RenderView;

class HTMLRenderer implements RendererInterface
{
    public function renderTitle(string $title)
    {
        return "<h1>$title</h1>";
    }

    public function renderHeader()
    {
        return "<html><body>";
    }

    public function renderTextBlock(string $text)
    {
        return "<div>$text</div>";
    }

    public function renderLink(string $link, string $title)
    {
        return "<a href='$link' title='$title'>";
    }

    public function renderImage(string $imageUrl)
    {
        return "<img src='$imageUrl'>";
    }

    public function renderFooter()
    {
        return "</body></html>";
    }

    public function renderParts(array $parts)
    {
        return implode("\n", $parts);
    }
}
