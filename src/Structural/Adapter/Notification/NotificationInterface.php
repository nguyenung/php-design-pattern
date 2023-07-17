<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Adapter\Notification;

interface NotificationInterface
{
    public function send(string $title, string $message): void;
}
