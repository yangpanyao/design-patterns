<?php
namespace DesignPatterns\State\example1;
/**
 * State类，抽象状态类，定义一个接口以封装与Context的一个特定状态相关的行为。
 * Class State
 * @package DesignPatterns\State\example1
 */
abstract class State
{
    abstract public function Handle(Context $context);
}