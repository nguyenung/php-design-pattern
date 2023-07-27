<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Memento\TextEditor;

/**
 * Originator
 */
class TextEditor
{
    private $text;

    public function write($text)
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

    public function createMemento()
    {
        return new TextMemento($this->text);
    }

    public function restoreFromMemento(TextMemento $memento)
    {
        $this->text = $memento->getText();
    }
}
