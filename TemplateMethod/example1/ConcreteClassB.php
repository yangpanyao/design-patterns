<?php
namespace DesignPatterns\TemplateMethod\example1;
/**
 * Class ConcreteClassB
 * @package DesignPatterns\TemplateMethod\example1
 */
class ConcreteClassB extends AbstractClass
{

    public function PrimitiveOperation1()
    {
        echo '具体类B实现方法1',PHP_EOL;
    }

    public function PrimitiveOperation2()
    {
        echo '具体类B实现方法2',PHP_EOL;
    }
}