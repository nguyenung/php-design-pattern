<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\TemplateMethod\SocialNetworkMessage;

abstract class SocialNetwork
{
    protected string $username;

    protected string $password;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    final public function postMessage(string $message)
    {
        if ($this->login($this->username, $this->password)) {
            $result = $this->sendMessage($message);
            $this->logout();
            return $result;
        }
        echo "Wrong credentials.\n";
        return false;
    }

    abstract protected function login(): bool;
    abstract protected function sendMessage(string $message): bool;
    abstract protected function logout();
}
