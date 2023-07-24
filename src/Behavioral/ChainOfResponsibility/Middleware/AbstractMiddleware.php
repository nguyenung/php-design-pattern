<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\ChainOfResponsibility\Middleware;

class AbstractMiddleware implements MiddlewareInterface
{
    /**
     * @var MiddlewareInterface|null $next
     */
    private ?MiddlewareInterface $next;

    public function linkWith(MiddlewareInterface $middleware): MiddlewareInterface
    {
        $this->next = $middleware;
        return $middleware;
    }

    public function check(string $email, string $password): bool
    {
        if (!$this->next) {
            return true;
        }
        return $this->next->check($email, $password);
    }
}
