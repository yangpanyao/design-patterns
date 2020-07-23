<?php
namespace DesignPatterns\Mediator\example1;


abstract class Mediator
{
    //定义一个抽象的发送消息方法，得到同事对象和发送信息
    abstract public function Send(string $message, Colleague $colleague);
}