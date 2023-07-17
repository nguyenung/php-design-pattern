<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Adapter\Notification;

class SlackNotification implements NotificationInterface
{
    private SlackApi $slackApi;

    private string $chatId;

    public function __construct(SlackApi $slackApi, string $chatId)
    {
        $this->slackApi = $slackApi;
        $this->chatId = $chatId;
    }

    public function send(string $title, string $message): void
    {
        $this->slackApi->login();
        $slackMessage = "##ChatID {$title}## - {$message}";
        $this->slackApi->sendMessage($this->chatId, $slackMessage);
    }
}
