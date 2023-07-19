<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Facade\EmailWelcome;

class UserFacade
{
    public static function createUserAndSendWelcomeEmail($email, $name)
    {
        $userService = new UserService();
        $user = $userService->createUser(['email' => $email, 'name' => $name]);

        $emailService = new EmailService();
        $emailService->sendWelcomeEmail($user);
    }
}
