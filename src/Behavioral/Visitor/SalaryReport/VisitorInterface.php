<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Visitor\SalaryReport;

interface VisitorInterface
{
    public function visitCompany(Company $company): string;
    public function visitDepartment(Department $department): string;
    public function visitEmployee(Employee $employee): string;
}
