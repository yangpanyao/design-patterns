<?php
namespace DesignPatterns\TemplateMethod\example1;
/**
 * ConcreteClass,实现父类所定义的一一个或多个抽象方法。每一一个AbstractClass都可以有任意多个
 * ConcreteClass与之对应，而每一一个 ConcreteClass都可以
 * 给出这些抽象方法(也就是顶级逻辑的组成步骤)的不同实现，从而使得顶级逻辑的实现各不相同。
 * Class ConcreteClassA
 * @package DesignPatterns\TemplateMethod\example1
 */
class ConcreteClassA extends AbstractClass
{

    public function PrimitiveOperation1()
    {
        echo '具体类A实现方法1',PHP_EOL;
    }

    public function PrimitiveOperation2()
    {
        echo '具体类A实现方法2',PHP_EOL;
    }
}