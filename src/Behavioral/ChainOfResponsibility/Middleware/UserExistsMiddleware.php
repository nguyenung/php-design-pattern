<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\ChainOfResponsibility\Middleware;

class UserExistsMiddleware extends AbstractMiddleware
{
    private Server $server;

    public function __construct(Server $server)
    {
        $this->server = $server;
    }

    public function check(string $email, string $password): bool
    {
        if (!$this->server->hasEmail($email)) {
            echo "UserExistsMiddleware: Email does not exist.\n";
            return false;
        }
        if (!$this->server->isValidPassword($email, $password)) {
            echo "UserExistsMiddleware: Password not match.\n";
            return false;
        }
        return parent::check($email, $password);
    }
}
