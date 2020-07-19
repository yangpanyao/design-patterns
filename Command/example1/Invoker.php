<?php
namespace DesignPatterns\Command\example1;

class Invoker
{
    private $command;

    /**
     * @param mixed $command
     */
    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    public function ExecuteCommand()
    {
        $this->command->execute();
    }
}