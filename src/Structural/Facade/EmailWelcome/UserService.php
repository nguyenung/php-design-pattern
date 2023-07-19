<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Facade\EmailWelcome;

class UserService
{
    public function createUser($userData)
    {
        echo "Create new user successfully.\n";
        return [
            'name' => $userData['name'],
            'email' => $userData['email'],
        ];
    }
}
