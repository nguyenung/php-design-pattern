<?php

namespace Ungnguyen\PhpDesignPattern\Creational\Builder\HousePlan;

class TipiHouseBuilder implements HouseBuilderInterface
{
    private House $house;

    public function __construct()
    {
        $this->house = new House();
    }

    public function buildBasement()
    {
        $this->house->setBasement('Wood bars');
    }

    public function buildStructure()
    {
        $this->house->setStructure('Wood blocks');
    }

    public function buildRoof()
    {
        $this->house->setRoof('Wood, caribou and seal skins');
    }

    public function buildInterior()
    {
        $this->house->setInterior('Fire wood');
    }

    public function getHouse(): House
    {
        return $this->house;
    }
}
