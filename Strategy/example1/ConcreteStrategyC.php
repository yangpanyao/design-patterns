<?php
namespace DesignPatterns\Strategy\example1;

class ConcreteStrategyC extends Strategy
{

    public function algorithmInterface()
    {
        echo "算法C实现";
    }
}