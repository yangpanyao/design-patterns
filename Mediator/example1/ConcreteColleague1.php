<?php
namespace DesignPatterns\Mediator\example1;


class ConcreteColleague1 extends Colleague
{
    public function __construct(Mediator $mediator)
    {
        parent::__construct($mediator);
    }

    public function Send(string $message)
    {
        $this->mediator->Send($message,$this);//发送消息时通常是中介者发送出去的
    }

    public function Notify(string $message)
    {
        echo '  同事1得到消息:'.$message."<br>";
    }

}