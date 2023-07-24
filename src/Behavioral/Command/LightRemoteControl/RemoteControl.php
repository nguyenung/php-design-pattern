<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\Command\LightRemoteControl;

class RemoteControl
{
    private CommandInterface $command;

    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
    }

    public function pressButton()
    {
        $this->command->execute();
    }
}
