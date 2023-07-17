<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Adapter\Notification;

class SlackApi
{
    private string $appId;

    private string $apiKey;

    public function __construct($appId, $apiKey)
    {
        $this->appId = $appId;
        $this->apiKey = $apiKey;
    }

    public function login(): void
    {
        echo "Login to Slack API `{$this->appId}` successfully.\n";
    }

    public function sendMessage(string $chatId, string $message): void
    {
        echo "Posted message to Slack chat `{$chatId}`: {$message}\n";
    }
}
