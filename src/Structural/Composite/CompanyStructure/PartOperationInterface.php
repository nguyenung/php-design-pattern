<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Composite\CompanyStructure;

interface PartOperationInterface
{
    public function add(CompanyPartInterface $companyPart);

    public function remove(CompanyPartInterface $companyPart);
}
