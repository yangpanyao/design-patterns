<?php
namespace DesignPatterns\State\example1;
/**
 * Class ConcreteStateB
 * @package DesignPatterns\State\example1
 */
class ConcreteStateB extends State
{
    public function Handle(Context $context)
    {
        echo "ConcreteStateB Handler<br>";
        //设置ConcreteStateA的下一状态是ConcreteStateA
        $context->setState(new ConcreteStateA());
    }
}