<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Mediator\ChatRoom;

use Couchbase\User;
use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class ChatRoomDemo implements DemoInterface
{

    public static function main(): void
    {
        $chatRoom = new ChatRoomMediator();
        $user1 = new ChatUser($chatRoom, 'John Doe', 1);
        $user2 = new ChatUser($chatRoom, 'Michael', 2);
        $user3 = new ChatUser($chatRoom, 'Tommy', 3);
        $chatRoom->addUser($user1);
        $chatRoom->addUser($user2);
        $chatRoom->addUser($user3);

        $user3->send('Hello world.');
        $user1->send('Hi there.');
    }
}
