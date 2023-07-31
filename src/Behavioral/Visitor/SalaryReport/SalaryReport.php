<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Visitor\SalaryReport;

class SalaryReport implements VisitorInterface
{

    public function visitCompany(Company $company): string
    {
        $companyName = $company->getName();
        $companyCost = 0;
        $departmentContent = '';
        foreach ($company->getDepartments() as $department) {
            $companyCost += $department->getCost();
            $departmentContent .= $this->visitDepartment($department);
        }
        $output = "================================" . PHP_EOL;
        $output .= "$companyName (" . Helper::formatCurrency($companyCost) . ")" . PHP_EOL;
        $output .= $departmentContent . PHP_EOL;
        $output .= "================================" . PHP_EOL;
        return $output;
    }

    public function visitDepartment(Department $department): string
    {
        $departmentName = $department->getName();
        $departmentCost = 0;
        $employeeContent = '';
        foreach ($department->getEmployees() as $employee) {
            $departmentCost += $employee->getSalary();
            $employeeContent .= $this->visitEmployee($employee);
        }
        $departmentCostStr = Helper::formatCurrency($departmentCost);
        $output = "-- {$departmentName} ({$departmentCostStr})" . PHP_EOL . PHP_EOL;
        $output .= $employeeContent;
        return $output;
    }

    public function visitEmployee(Employee $employee): string
    {
        $name = $employee->getName();
        $role = $employee->getRole();
        $salary = Helper::formatCurrency($employee->getSalary());

        return "{$salary} {$name}({$role})" . PHP_EOL;
    }
}
