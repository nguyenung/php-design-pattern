<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Composite\CompanyStructure;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class CompanyStructureDemo implements DemoInterface
{

    public static function main(): void
    {
        $ceo = new Department('Ung Nguyen', 'Ceo');
        $department = new Department('IT', 'Department');
        $ceo->add($department);

        $group1 = new Group('Group 1', 'Group');
        $department->add($group1);

        $member1 = new Employee('John Doe', 'Member');
        $member2 = new Employee('Jane Doe', 'Member');
        $group1->add($member1);
        $group1->add($member2);

        $ceo->displayHierarchy();
    }
}
