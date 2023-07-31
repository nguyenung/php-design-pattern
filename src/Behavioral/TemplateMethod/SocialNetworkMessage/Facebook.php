<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\TemplateMethod\SocialNetworkMessage;

class Facebook extends SocialNetwork
{

    protected function login(): bool
    {
        echo "\nChecking user's credentials...\n";
        echo "Name: " . $this->username . "\n";
        echo "Password: *****\n";

        Helper::simulateNetworkLatency();

        echo "\n\nFacebook: '" . $this->username . "' has logged in successfully.\n";

        return true;
    }

    protected function sendMessage(string $message): bool
    {
        echo "Facebook: '" . $this->username . "' has posted '" . $message . "'.\n";
        return true;
    }

    protected function logout()
    {
        echo "Facebook: '" . $this->username . "' has been logged out.\n";
    }
}
