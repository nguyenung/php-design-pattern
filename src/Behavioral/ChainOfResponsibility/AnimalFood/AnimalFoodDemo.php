<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\ChainOfResponsibility\AnimalFood;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class AnimalFoodDemo implements DemoInterface
{
    public static function main(): void
    {
        $monkeyHandler = new MonkeyHandler();
        $dogHandler = new DogHandler();
        $tigerHandler = new TigerHandler();
        $monkeyHandler->setNext($dogHandler)->setNext($tigerHandler);

        echo "===== Chain: Monkey > Dog > Tiger\n";
        self::executeHandler($monkeyHandler);
        echo "--------------------------------\n";
        echo "===== Chain: Dog > Tiger\n";
        self::executeHandler($dogHandler);
    }

    private static function executeHandler(HandlerInterface $handler): void
    {
        $arr = ['Meat', 'Snack', 'Banana', 'Candy'];
        foreach ($arr as $foodItem) {
            echo "Who needs some $foodItem?\n";
            $result = $handler->handle($foodItem);
            if ($result) {
                echo "--- " . $result;
            } else {
                echo "--- No one want it.\n";
            }
        }
    }
}
