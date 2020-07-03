<?php
namespace DesignPatterns\Strategy\example1;
/**
 * ConcreteStrategy,封装了具体的算法或行为，继承于Strategy
 * Class ConcreteStrategyA
 * @package DesignPatterns\Strategy\example1
 */
class ConcreteStrategyA extends Strategy
{
    //算法A实现方法
    public function algorithmInterface()
    {
        echo "算法A实现";
    }
}