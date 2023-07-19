<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Facade\EmailWelcome;

class EmailService
{
    public function sendWelcomeEmail(array $user)
    {
        echo "Send welcome email to {$user['email']}";
    }
}
