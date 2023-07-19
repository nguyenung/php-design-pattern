<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Facade\EmailWelcome;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class EmailWelcomeDemo implements DemoInterface
{

    public static function main(): void
    {
        UserFacade::createUserAndSendWelcomeEmail('abc@example.com', 'John Doe');
    }
}
