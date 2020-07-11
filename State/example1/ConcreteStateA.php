<?php
namespace DesignPatterns\State\example1;
/**
 * ConcreteState类，具体状态，每一个子类实现一个与Context的一个状态相关的行为。
 * Class ConcreteStateA
 * @package DesignPatterns\State\example1
 */
class ConcreteStateA extends State
{
    public function Handle(Context $context)
    {
        echo "ConcreteStateA Handler<br>";
        //设置ConcreteStateA的下一状态是ConcreteStateB
        $context->setState(new ConcreteStateB()) ;
    }
}