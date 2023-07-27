<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Memento\TextEditor;

/**
 * Caretaker
 */
class TextEditorHistory
{
    private $mementos = [];

    public function addMemento(TextMemento $memento)
    {
        $this->mementos[] = $memento;
    }

    public function getMemento($index)
    {
        return $this->mementos[$index] ?? null;
    }
}
