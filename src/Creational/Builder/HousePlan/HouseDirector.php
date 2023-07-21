<?php

namespace Ungnguyen\PhpDesignPattern\Creational\Builder\HousePlan;

class HouseDirector
{
    private HouseBuilderInterface $builder;

    public function __construct(HouseBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function getHouse()
    {
        return $this->builder->getHouse();
    }

    public function constructHouse()
    {
        $this->builder->buildBasement();
        $this->builder->buildStructure();
        $this->builder->buildRoof();
        $this->builder->buildInterior();
    }
}
