<?php
namespace DesignPatterns\Mediator\example1;


class ConcreteColleague2 extends Colleague
{
    public function __construct(Mediator $mediator)
    {
        parent::__construct($mediator);
    }

    public function Send(string $message)
    {
        $this->mediator->Send($message,$this);
    }

    public function Notify(string $message)
    {
        echo '  同事2得到消息:'.$message."<br>";
    }
}