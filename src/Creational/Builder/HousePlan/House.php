<?php

namespace Ungnguyen\PhpDesignPattern\Creational\Builder\HousePlan;

class House implements HouseInterface
{
    private string $basement;
    private string $structure;
    private string $roof;
    private string $interior;
    public function setBasement(string $basement)
    {
        $this->basement = $basement;
    }

    public function setStructure(string $structure)
    {
        $this->structure = $structure;
    }

    public function setRoof(string $roof)
    {
        $this->roof = $roof;
    }

    public function setInterior(string $interior)
    {
        $this->interior = $interior;
    }

    public function show()
    {
        echo "Basement: " . $this->basement . "\n";
        echo "Structure: " . $this->structure . "\n";
        echo "Roof: " . $this->roof . "\n";
        echo "Interior: " . $this->interior . "\n";
    }
}
