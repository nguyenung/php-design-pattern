<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\TemplateMethod\SocialNetworkMessage;

class Twitter extends SocialNetwork
{
    public function logIn(): bool
    {
        echo "\nChecking user's credentials...\n";
        echo "Name: " . $this->username . "\n";
        echo "Password: *****\n";

        Helper::simulateNetworkLatency();

        echo "\n\nTwitter: '" . $this->username . "' has logged in successfully.\n";

        return true;
    }

    public function sendMessage(string $message): bool
    {
        echo "Twitter: '" . $this->username . "' has posted '" . $message . "'.\n";

        return true;
    }

    public function logOut(): void
    {
        echo "Twitter: '" . $this->username . "' has been logged out.\n";
    }
}
