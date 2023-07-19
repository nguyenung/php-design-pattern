<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Composite\CompanyStructure;

abstract class CompanyPart
{
    protected $name;

    protected $role;

    public function __construct(string $name, string $role)
    {
        $this->name = $name;
        $this->role = $role;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getRole()
    {
        return $this->role;
    }
}
