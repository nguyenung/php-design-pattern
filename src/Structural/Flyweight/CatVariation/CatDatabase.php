<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Flyweight\CatVariation;

class CatDatabase
{
    /**
     * @var array|Cat[] $cats
     */
    private array $cats;

    /**
     * @var array|CatVariation[] $variation
     */
    private array $variation;

    public function addCat(
        string $name,
        int $age,
        string $owner,
        string $breed,
        string $image,
        string $color,
        string $fur
    ) {
        $variation = $this->getVariation($breed, $image, $color, $fur);
        $this->cats[] = new Cat($name, $age, $owner, $variation);
        echo "CatDatabase: added cat ({$name}, {$breed})\n";
    }

    public function getVariation(
        string $breed,
        string $image,
        string $color,
        string $fur
    ) {
        $key = $this->getKey(get_defined_vars());
        if (!isset($this->variation[$key])) {
            $this->variation[$key] = new CatVariation($breed, $image, $color, $fur);
        }
        return $this->variation[$key];
    }

    private function getKey(array $data): string
    {
        return md5(implode('_', $data));
    }

    /**
     * @param array $query
     *
     * @return Cat|null
     */
    public function findCat(array $query): ?Cat
    {
        foreach ($this->cats as $cat) {
            if ($cat->match($query)) {
                return $cat;
            }
        }
        echo "Cat not found.\n";
        return null;
    }
}
