<?php
namespace DesignPatterns\Command\example1;

class ConcreteCommand implements Command
{
    private $receiver;
    public function __construct($receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->action();
    }
}