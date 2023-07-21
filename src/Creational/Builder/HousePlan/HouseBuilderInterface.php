<?php

namespace Ungnguyen\PhpDesignPattern\Creational\Builder\HousePlan;

interface HouseBuilderInterface
{
    public function buildBasement();
    public function buildStructure();
    public function buildRoof();
    public function buildInterior();
    public function getHouse(): House;
}
