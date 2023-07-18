<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Bridge\RenderView;

class Product
{
    private string $title;
    private string $description;

    private string $link;

    private string $imageUrl;

    public function __construct(string $title, string $description, string $link, string $imageUrl)
    {
        $this->title = $title;
        $this->description = $description;
        $this->link = $link;
        $this->imageUrl = $imageUrl;
    }

    public function getTitle():string
    {
        return $this->title;
    }

    public function getDescription():string
    {
        return $this->description;
    }

    public function getLink():string
    {
        return $this->link;
    }

    public function getImageUrl():string
    {
        return $this->imageUrl;
    }
}
