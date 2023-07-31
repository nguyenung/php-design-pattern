<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Visitor\SalaryReport;

class Company implements EntityInterface
{
    private string $name;

    /** @var Department[] $departments */
    private array $departments;

    /**
     * @param string $name
     * @param Department[] $departments
     */
    public function __construct(string $name, array $departments)
    {
        $this->name = $name;
        $this->departments = $departments;
    }

    public function accept(SalaryReport $visitor): string
    {
        return $visitor->visitCompany($this);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getDepartments(): array
    {
        return $this->departments;
    }
}
