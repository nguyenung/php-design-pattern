<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Visitor\SalaryReport;

class Helper
{
    public static function formatCurrency(int $amount): string
    {
        return "$" . number_format($amount);
    }
}
