<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Mediator\ChatRoom;

class ChatUser
{
    private string $name;
    private int $id;
    private ChatRoomMediatorInterface $chatRoomMediator;
    
    public function __construct(ChatRoomMediatorInterface $chatRoomMediator, string $name, int $id)
    {
        $this->chatRoomMediator = $chatRoomMediator;
        $this->name = $name;
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    public function send(string $message)
    {
        $this->chatRoomMediator->sendMessage($this, $message);
    }

    public function receive(string $message)
    {
        echo $message . PHP_EOL;
    }
}
