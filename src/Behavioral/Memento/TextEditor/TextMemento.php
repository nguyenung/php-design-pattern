<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Memento\TextEditor;

/**
 * Memento
 */
class TextMemento
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }
}
