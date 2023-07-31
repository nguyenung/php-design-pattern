<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\TemplateMethod\SocialNetworkMessage;

use InvalidArgumentException;
use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class SocialNetworkMessageDemo implements DemoInterface
{
    public static function main(): void
    {
        echo "Hi there, this is a social network message tool.\n";
        echo "Please login first.\n";
        $social = readline("Choose social network:\n   - Facebook (press 1)\n   - Twitter (press 2)\n");

        $username = readline('Enter Username: ');
        $password = self::getPassword();

        $socialNetwork = match ($social) {
            "1" => new Facebook($username, $password),
            "2" => new Twitter($username, $password),
            default => throw new InvalidArgumentException("Invalid option."),
        };
        $socialNetwork->postMessage('Hello world.');
    }

    private static function getPassword($prompt = "Enter Password: ") {
        echo $prompt;
        system('stty -echo');
        $password = trim(fgets(STDIN));
        system('stty echo');
        return $password;
    }
}
