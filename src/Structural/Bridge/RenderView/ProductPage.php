<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Bridge\RenderView;

class ProductPage extends Page
{
    protected Product $product;

    public function __construct(RendererInterface $renderer, Product $product)
    {
        parent::__construct($renderer);
        $this->product = $product;
    }

    public function view(): string
    {
        return $this->renderer->renderParts([
            $this->renderer->renderHeader(),
            $this->renderer->renderTitle($this->product->getTitle()),
            $this->renderer->renderTextBlock($this->product->getDescription()),
            $this->renderer->renderLink($this->product->getLink(), $this->product->getTitle()),
            $this->renderer->renderImage($this->product->getImageUrl()),
            $this->renderer->renderFooter(),
        ]);
    }
}
