<?php
namespace DesignPatterns\Flyweight\example1;
/**
 * ConcreteFlyweight继承Flyweight超类或实现Flyweight接口，并为内部状态增加储存空间
 * Class ConcreteFlyweight
 * @package DesignPatterns\Flyweight\example
 */
class ConcreteFlyweight extends Flyweight
{

    public function Operation(int $extrinsicstate)
    {
        echo "具体Flyweight: ".$extrinsicstate."<br>";
    }
}