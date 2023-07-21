<?php

namespace Ungnguyen\PhpDesignPattern\Creational\Builder\HousePlan;

interface HouseInterface
{
    public function setBasement(string $basement);
    public function setStructure(string $structure);
    public function setRoof(string $roof);
    public function setInterior(string $interior);

    public function show();
}
