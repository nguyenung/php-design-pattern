<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Flyweight\CatVariation;

class Cat
{
    private string $name;
    private int $age;
    private string $owner;
    private CatVariation $variation;

    public function __construct(string $name, int $age, string $owner, CatVariation $variation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->owner = $owner;
        $this->variation = $variation;
    }

    public function match(array $query): bool
    {
        foreach ($query as $key => $value) {
            if (property_exists($this, $key)) {
                if ($this->$key != $value) {
                    return false;
                }
            } elseif (property_exists($this->variation, $key)) {
                if ($this->variation->$key != $value) {
                    return false;
                }
            } else {
                return false;
            }
        }
        return true;
    }

    public function render()
    {
        $this->variation->renderProfile($this->name, $this->age, $this->owner);
    }
}
