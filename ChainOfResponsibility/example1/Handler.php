<?php
namespace DesignPatterns\ChainOfResponsibility\example1;
/**
 * Handler类 抽象处理者角色
 * 定义了一个处理请求的接口。当然对于链子的不同实现，也可以在这个角色中实现后继链。
 * Class Handler
 * @package DesignPatterns\ChainOfResponsibility\example1
 */
abstract class Handler
{
    protected $successor;

    /**
     * @param mixed $successor
     */
    public function setSuccessor(Handler $successor)
    {
        $this->successor = $successor;
    }
    //处理请求的方法
    abstract public function HandleRequest($request);

}