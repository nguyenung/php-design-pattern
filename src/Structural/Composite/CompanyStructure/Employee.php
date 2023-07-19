<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Composite\CompanyStructure;

class Employee extends CompanyPart implements CompanyPartInterface
{
    public function displayHierarchy($depth = 0): void
    {
        $name = $this->getName();
        $role = $this->getRole();
        echo str_repeat('-', $depth) . " {$name} ({$role})\n";
    }
}
