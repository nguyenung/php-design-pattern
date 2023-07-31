<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Visitor\SalaryReport;

class Employee implements EntityInterface
{
    private string $name;
    private string $role;
    private int $salary;

    /**
     * @param string $name
     * @param int $salary
     */
    public function __construct(string $name, string $role, int $salary)
    {
        $this->name = $name;
        $this->role = $role;
        $this->salary = $salary;
    }

    public function accept(SalaryReport $visitor): string
    {
        return $visitor->visitEmployee($this);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @return int
     */
    public function getSalary(): int
    {
        return $this->salary;
    }
}
