<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Memento\TextEditor;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class TextEditorDemo implements DemoInterface
{
    public static function main(): void
    {
        $textEditor = new TextEditor();
        $history = new TextEditorHistory();

        $textEditor->write('Hello, world!');
        echo "Current text: {$textEditor->getText()}\n";
        $history->addMemento($textEditor->createMemento());

        $textEditor->write('More text after hello.');
        echo "Current text: {$textEditor->getText()}\n";
        $history->addMemento($textEditor->createMemento());

        $memento = $history->getMemento(0);
        if ($memento) {
            $textEditor->restoreFromMemento($memento);
            echo "Restored to previous state: {$textEditor->getText()}\n";
        }
    }
}
