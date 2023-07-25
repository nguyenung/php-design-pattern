<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Mediator\ChatRoom;

class ChatRoomMediator implements ChatRoomMediatorInterface
{
    /**
     * @var array|ChatUser[] $user
     */
    private array $users;

    public function addUser(ChatUser $user)
    {
        $this->users[] = $user;
    }
    public function sendMessage(ChatUser $user, string $message)
    {
        $sender = $user->getName();
        $time = date('H:i:s');
        $show = "[$time] $sender: $message\n";
        echo $show;
        foreach ($this->users as $listener) {
            if ($listener->getId() != $user->getId()) {
                echo $listener->getName() . ": $show";
            }
        }
    }
}
