<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Visitor\SalaryReport;

class Department implements EntityInterface
{
    private string $name;

    /** @var Employee[] $employees */
    private array $employees;

    /**
     * @param string $name
     * @param array|Employee[] $employees
     */
    public function __construct(string $name, array $employees)
    {
        $this->name = $name;
        $this->employees = $employees;
    }

    public function accept(SalaryReport $visitor): string
    {
        return $visitor->visitDepartment($this);
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
    public function getEmployees(): array
    {
        return $this->employees;
    }

    /**
     * @return int
     */
    public function getCost(): int
    {
        $cost = 0;
        foreach ($this->employees as $employee) {
            $cost += $employee->getSalary();
        }
        return $cost;
    }
}
