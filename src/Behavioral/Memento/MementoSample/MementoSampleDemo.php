<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Memento\MementoSample;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class MementoSampleDemo implements DemoInterface
{
    public static function main(): void
    {
        $originator = new Originaror('Super-duper-super-puper-super.');
        $caretaker = new CareTaker($originator);

        $caretaker->backup();
        $originator->doSomething();

        $caretaker->backup();
        $originator->doSomething();

        echo "\n";
        $caretaker->showHistory();

        echo "\nClient: Now, let's rollback!\n\n";
        $caretaker->undo();

        echo "\nClient: Once more!\n\n";
        $caretaker->undo();
    }
}
