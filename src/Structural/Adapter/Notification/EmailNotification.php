<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Adapter\Notification;

class EmailNotification implements NotificationInterface
{
    private string $adminEmail;

    public function __construct(string $adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }

    public function send(string $title, string $message): void
    {
        echo "Send email '$title' to '{$this->adminEmail}' with message: {$message}\n";
    }
}
