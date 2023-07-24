<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\ChainOfResponsibility\Middleware;

class Server
{
    private array $users;

    private ?MiddlewareInterface $middleware;

    public function setMiddleware(MiddlewareInterface $middleware)
    {
        $this->middleware = $middleware;
    }
    public function register(string $email, string $password)
    {
        $this->users[$email] = md5($password);
    }

    public function login(string $email, string $password): bool
    {
        if ($this->middleware->check($email, $password)) {
            echo "Login successful with email $email\n";
            return true;
        }
        return false;
    }

    public function hasEmail(string $email): bool
    {
        return isset($this->users[$email]);
    }

    public function isValidPassword(string $email, string $password): bool
    {
        return $this->users[$email] = md5($password);
    }
}
