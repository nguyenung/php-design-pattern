<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Bridge\RenderView;

interface RendererInterface
{
    public function renderTitle(string $title);

    public function renderHeader();

    public function renderTextBlock(string $text);

    public function renderLink(string $link, string $title);

    public function renderImage(string $imageUrl);

    public function renderFooter();

    public function renderParts(array $parts);
}
