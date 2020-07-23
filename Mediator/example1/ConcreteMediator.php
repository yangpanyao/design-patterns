<?php
namespace DesignPatterns\Mediator\example1;

class ConcreteMediator extends Mediator
{
    private $Colleague1;
    private $Colleague2;

    //需要了解所有的具体同事对象
    /**
     * @param mixed $colleague1
     */
    public function setColleague1($colleague1): void
    {
        $this->Colleague1 = $colleague1;
    }

    /**
     * @param mixed $colleague2
     */
    public function setColleague2($colleague2): void
    {
        $this->Colleague2 = $colleague2;
    }
    //重写发送消息的方法，根据对象作出选择的判断，通知对象
    public function Send(string $message, Colleague $colleague)
    {
        if ($this->Colleague1 == $colleague){
            $this->Colleague2->Notify($message);
        }else{
            $this->Colleague1->Notify($message);
        }

    }

}