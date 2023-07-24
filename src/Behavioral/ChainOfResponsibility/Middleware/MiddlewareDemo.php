<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\ChainOfResponsibility\Middleware;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class MiddlewareDemo implements DemoInterface
{
    public static function main(): void
    {
        $server = new Server();
        $server->register('admin@sample.com', '123456');
        $server->register('user@sample.com', '654321');

        $middleware = new ThrottlingMiddleware(2);
        $middleware->linkWith(new UserExistsMiddleware($server))
            ->linkWith(new RoleCheckMiddleware());

        $server->setMiddleware($middleware);

        do {
            echo "Enter your email:\n";
            $email = readline();
            echo "Enter your password:\n";
            $password = readline();
            $success = $server->login($email, $password);
        } while (!$success);
    }
}
