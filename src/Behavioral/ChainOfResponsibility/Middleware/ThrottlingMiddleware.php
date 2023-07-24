<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\ChainOfResponsibility\Middleware;

class ThrottlingMiddleware extends AbstractMiddleware
{
    private int $requestPerMinutes;
    private int $currentTime;
    private int $request;

    public function __construct(int $requestPerMinutes)
    {
        $this->requestPerMinutes = $requestPerMinutes;
        $this->currentTime = time();
        $this->request = 0;
    }

    public function check(string $email, string $password): bool
    {
        if (time() > $this->currentTime + 60) {
            $this->request = 0;
            $this->currentTime = time();
        }
        $this->request ++;
        if ($this->request > $this->requestPerMinutes) {
            echo "ThrottlingMiddleware: limit reached login time.\n";
            die;
        }
        return parent::check($email, $password);
    }
}
