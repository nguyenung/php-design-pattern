<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Visitor\SalaryReport;

interface EntityInterface
{
    public function accept(SalaryReport $visitor): string;
}
