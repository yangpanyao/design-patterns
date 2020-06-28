<?php
namespace DesignPatterns\Flyweight\example1;
/**
 * UnsharedConcreteFlyweight 是指那些不需要共享的Flyweight子类，因为Flyweight接口并不强制共享
 * Class UnsharedConcreteFlyweight
 * @package DesignPatterns\Flyweight\example
 */
class UnsharedConcreteFlyweight extends Flyweight
{

    public function Operation(int $extrinsicstate)
    {
        echo "不共享的具体Flyweight: ".$extrinsicstate."<br>";
    }
}