<?php
namespace DesignPatterns\Strategy\example1;
/**
 * Context,用一个ConcreteStrategy来配置，维护一个对 Strategy 对象的引用。
 * Class Context
 * @package DesignPatterns\Strategy\example1
 */

class Context
{
    private $strategy;
    //初始化时传入具体的策略对象
    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }
    //根据具体的策略对象调用其算法的方法
    public function ContextInterface()
    {
        $this->strategy->algorithmInterface();
    }

}