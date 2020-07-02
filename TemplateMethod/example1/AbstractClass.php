<?php
namespace DesignPatterns\TemplateMethod\example1;
/**
 * AbstractClass是抽象类，其实也就是一抽象模板， 定义并实现了一个模板方法。这个模板方法一般
 * 是一个具体方法，它给出了一个顶级逻辑的骨架，而逻辑的组成步骤在相应的抽象操作中，推迟到子类
 * 实现。顶级逻辑也有可能调用一些具体方法。
 * Class AbstractClass
 * @package DesignPatterns\TemplateMethod\example1
 */
abstract class AbstractClass
{
    //定义抽象行为，在子类中实现
    abstract public function PrimitiveOperation1();
    abstract public function PrimitiveOperation2();

    //模板方法给出逻辑的骨架，而逻辑的组成是一些相应的抽象操作
    //它们都推迟到子类中实现
    public function TemplateMethod()
    {
        $this->PrimitiveOperation1();
        $this->PrimitiveOperation2();
    }

}