<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Mediator\ChatRoom;

interface ChatRoomMediatorInterface
{
    public function sendMessage(ChatUser $user, string $message);
}