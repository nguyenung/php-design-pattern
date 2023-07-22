<?php

namespace Ungnguyen\PhpDesignPattern\Creational\Prototype\Page;

class Author
{
    /**
     * @var array|Page[] $pages
     */
    private array $pages;
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addPage(Page $page)
    {
        $this->pages[] = $page;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getPages(): array
    {
        return $this->pages;
    }
}
