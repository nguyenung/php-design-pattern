<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Memento\MementoSample;

class CareTaker
{
    /** @var array|MementoInterface[] $mementos */
    private array $mementos;
    private Originaror $originator;
    public function __construct(Originaror $originator)
    {
        $this->originator = $originator;
    }

    public function backup(): void
    {
        echo "CareTaker: Saving Originator's state...\n";
        $this->mementos[] = $this->originator->save();
    }

    public function undo(): void
    {
        if (!count($this->mementos)) {
            return;
        }
        $memento = array_pop($this->mementos);
        echo "CareTaker: Restoring state to: " . $memento->getName() . "\n";
        try {
            $this->originator->restore($memento);
        } catch (\Exception $e) {
            $this->undo();
        }
    }

    public function showHistory(): void
    {
        echo "CareTaker: Here's the list of mementos: \n";
        foreach ($this->mementos as $memento) {
            echo $memento->getName() . "\n";
        }
    }
}
