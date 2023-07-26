<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Memento\MementoSample;

class Originaror
{
    private $state;

    public function __construct(string $state)
    {
        $this->state = $state;
        echo "Originator: My initial state is: {$this->state}\n";
    }

    public function doSomething(): void
    {
        echo "Originator: I'm doing something important.\n";
        $this->state = $this->generateRandomString();
        echo "Originator: and my state has changed to {$this->state}.\n";
    }

    private function generateRandomString(int $length = 10): string
    {
        return substr(
            str_shuffle(
                str_repeat(
                    $x = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
                    ceil($length / strlen($x))
                )
            ),
            1,
            $length,
        );
    }

    public function save(): MementoInterface
    {
        return new ConcreteMemento($this->state);
    }

    public function restore(MementoInterface $memento): void
    {
        $this->state = $memento->getState();
        echo "Originator: My state has change to {$this->state}\n";
    }
}
