<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Visitor\SalaryReport;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class SalaryReportDemo implements DemoInterface
{
    public static function main(): void
    {
        $itDepartment = new Department('IT Department', [
            new Employee('Alex', 'Manager', 12000),
            new Employee('Jennie', 'Sub-manager', 8000),
            new Employee('Lynda', 'QA', 5000),
            new Employee('John', 'Developer', 6000),
            new Employee('David', 'Developer', 6200),
        ]);

        $contentDepartment = new Department('Content Department', [
            new Employee('June', 'Manager', 10000),
            new Employee('Jessie', 'Content writer', 6000),
            new Employee('Tom', 'Content writer', 5000),
            new Employee('Hanna', 'Copy writer', 5500),
        ]);

        $company = new Company('Big Dream Company', [$itDepartment, $contentDepartment]);
        $salaryReport = new SalaryReport();

        echo "***** Render company salary report:" . PHP_EOL;
        echo $company->accept($salaryReport);
        echo PHP_EOL;

        echo "***** Render IT Department salary report:" . PHP_EOL;
        echo $itDepartment->accept($salaryReport);
        echo PHP_EOL;

        echo "***** Render single employee salary report:" . PHP_EOL;
        $employee = new Employee('Andree', 'Freelancer', 11000);
        echo $employee->accept($salaryReport);
        echo PHP_EOL;
    }
}
