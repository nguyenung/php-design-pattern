<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\ChainOfResponsibility\Middleware;

class RoleCheckMiddleware extends AbstractMiddleware
{
    public function check(string $email, string $password): bool
    {
        if ($email === 'admin@sample.com') {
            echo "RoleCheckMiddleware: Hello Admin \n";
            return true;
        }
        echo "RoleCheckMiddleware: Hello user \n";
        return parent::check($email, $password);
    }
}
