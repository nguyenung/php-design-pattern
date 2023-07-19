<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Composite\CompanyStructure;

use SplObjectStorage;

class Department extends CompanyPart implements CompanyPartInterface, PartOperationInterface
{
    protected SplObjectStorage $groups;

    public function __construct(string $name, string $role)
    {
        parent::__construct($name, $role);
        $this->groups = new SplObjectStorage();
    }

    public function add(CompanyPartInterface $companyPart)
    {
        $this->groups->attach($companyPart);
    }

    public function remove(CompanyPartInterface $companyPart)
    {
        $this->groups->detach($companyPart);
    }

    public function displayHierarchy($depth = 0)
    {
        $name = $this->getName();
        $role = $this->getRole();
        echo str_repeat('-', $depth) . " {$name} ({$role})\n";
        foreach ($this->groups as $item) {
            $item->displayHierarchy($depth + 1);
        }
    }
}
