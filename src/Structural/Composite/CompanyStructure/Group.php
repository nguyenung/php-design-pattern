<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Composite\CompanyStructure;

use SplObjectStorage;

class Group extends CompanyPart implements CompanyPartInterface, PartOperationInterface
{
    protected SplObjectStorage $members;

    public function __construct(string $name, string $role)
    {
        parent::__construct($name, $role);
        $this->members = new SplObjectStorage();
    }

    public function add(CompanyPartInterface $companyPart)
    {
        $this->members->attach($companyPart);
    }

    public function remove(CompanyPartInterface $companyPart)
    {
        $this->members->detach($companyPart);
    }

    public function displayHierarchy($depth = 0)
    {
        $name = $this->getName();
        $role = $this->getRole();
        echo str_repeat('-', $depth) . " {$name} ({$role})\n";
        foreach ($this->members as $member) {
            $member->displayHierarchy($depth + 1);
        }
    }
}
