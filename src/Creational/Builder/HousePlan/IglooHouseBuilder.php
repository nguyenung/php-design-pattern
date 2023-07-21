<?php

namespace Ungnguyen\PhpDesignPattern\Creational\Builder\HousePlan;

class IglooHouseBuilder implements HouseBuilderInterface
{
    private House $house;

    public function __construct()
    {
        $this->house = new House();
    }

    public function buildBasement()
    {
        $this->house->setBasement('Ice bars');
    }

    public function buildStructure()
    {
        $this->house->setStructure('Ice blocks');
    }

    public function buildRoof()
    {
        $this->house->setRoof('Ice dome');
    }

    public function buildInterior()
    {
        $this->house->setInterior('Ice carving');
    }

    public function getHouse(): House
    {
        return $this->house;
    }
}
