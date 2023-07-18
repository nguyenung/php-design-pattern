<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Bridge\RenderView;

class JsonRenderer implements RendererInterface
{
    public function renderTitle(string $title)
    {
        return "title: {$title}";
    }

    public function renderHeader()
    {
        return "";
    }

    public function renderTextBlock(string $text)
    {
        return "text: {$text}";
    }

    public function renderLink(string $link, string $title)
    {
        return "{link: {url: '{$link}', title: '{$title}'}}";
    }

    public function renderImage(string $imageUrl)
    {
        return "image: '{$imageUrl}'";
    }

    public function renderFooter()
    {
        return '';
    }

    public function renderParts(array $parts)
    {
        return "{". implode(",", array_filter($parts)) ."}";
    }
}
