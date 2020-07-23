<?php
namespace DesignPatterns\Mediator\example2;
/**
 * 交换机 中介者角色
 * 当只需要一个具体中介者时，Mediator 和 ConcreteMediator可以合二为一
 * Class Mediator
 * @package DesignPatterns\Mediator\example2
 */
class Mediator
{
    protected $colleague =[];
    //交换机业务处理
    public function operation($num, $message)
    {
        if (!array_key_exists($num,$this->colleague)) {
            echo __CLASS__."--交换机内没有此号码信息，无法通话".PHP_EOL;
        }else{
            $this->colleague[$num]->receiveMsg($message);
        }
    }
    //注册号码
    public function register($num,Colleague $colleague)
    {
        if (!in_array($colleague,$this->colleague)) {
            $this->colleague[$num] = $colleague;
        }
        $colleague->setMediator($this);
    }


}