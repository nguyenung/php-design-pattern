<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Flyweight\CatVariation;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class CatVariationDemo implements DemoInterface
{

    public static function main(): void
    {
        $catData = [
            [
                'name' => 'Jenny',
                'age' => 2,
                'owner' => 'David',
                'breed' => 'England',
                'image' => 'image1',
                'color' => 'red',
                'fur' => 'short',
            ],
            [
                'name' => 'Tony',
                'age' => 3,
                'owner' => 'Anna',
                'breed' => 'England',
                'image' => 'image1',
                'color' => 'red',
                'fur' => 'short',
            ],
            [
                'name' => 'Jenny',
                'age' => 2,
                'owner' => 'David',
                'breed' => 'France',
                'image' => 'image2',
                'color' => 'brown',
                'fur' => 'short',
            ]
        ];

        $cateDatabase = new CatDatabase();
        foreach ($catData as $catDataItem) {
            $cateDatabase->addCat(...array_values($catDataItem));
        }

        echo "--------------------------------\n";

        $cat1 = $cateDatabase->findCat(['name' => 'Jenny']);
        $cat1?->render();

        $cat2 = $cateDatabase->findCat(['name' => 'Abccc']);
        $cat2?->render();
    }
}
