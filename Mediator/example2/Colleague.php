<?php
namespace DesignPatterns\Mediator\example2;
/**
 * 抽象同事类-电话机
 * Class Colleague
 * @package DesignPatterns\Mediator\example2
 */
abstract class Colleague
{
    protected $mediator;    //用于存放中介者
    abstract public function sendMsg($num,$msg);
    abstract public function receiveMsg($msg);
    /**
     * 设置中介者对象
     * @param mixed $mediator
     */
    final public function setMediator($mediator): void
    {
        $this->mediator = $mediator;
    }
}