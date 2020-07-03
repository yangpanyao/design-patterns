<?php
namespace DesignPatterns\Strategy\example1;

class ConcreteStrategyB extends Strategy
{

    public function algorithmInterface()
    {
        echo "算法B实现";
    }
}