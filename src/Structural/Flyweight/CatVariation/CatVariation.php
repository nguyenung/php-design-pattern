<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Flyweight\CatVariation;

class CatVariation
{
    public string $breed;
    public string $image;
    public string $color;
    public string $fur;

    public function __construct(string $breed, string $image, string $color, string $fur)
    {
        $this->breed = $breed;
        $this->image = $image;
        $this->color = $color;
        $this->fur = $fur;
    }

    public function renderProfile(string $name, int $age, string $owner)
    {
        echo "Name: {$name}\n";
        echo "Age: {$age}\n";
        echo "Owner: {$owner}\n";
        echo "Breed: {$this->breed}\n";
        echo "Color: {$this->color}\n";
        echo "Fur: {$this->fur}\n";
        echo "Image: {$this->image}\n";
        echo "===============================\n";
    }
}
