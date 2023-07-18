<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Bridge\RenderView;

abstract class Page
{
    protected RendererInterface $renderer;

    public function __construct(RendererInterface $renderer)
    {
        $this->renderer = $renderer;
    }

    public function changeRenderer(RendererInterface $renderer): void
    {
        $this->renderer = $renderer;
    }

    abstract public function view(): string;
}
