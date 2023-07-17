<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Adapter\Notification;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class NotificationDemo implements DemoInterface
{
    public static function main(): void
    {
        $emailNotification = new EmailNotification('admin@example.com');
        $emailNotification->send('Email subject', 'Email content');

        echo "\n----------------------------------------------------------------\n";

        $slackApi = new SlackApi('SLACK_APP_API', 'super_secret');
        $slackNotification = new SlackNotification($slackApi, 'CHAT_ID');
        $slackNotification->send('Server_Alert', 'Server is too slow now!!!');
    }
}
