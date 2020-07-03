<?php
namespace DesignPatterns\Strategy\example1;
/**
 * Strategy类，定义所有支持算法的公共接口  可以是抽象类或接口
 * Class Strategy
 * @package DesignPatterns\Strategy\example1
 */
abstract class Strategy
{
    //算法方法
    abstract public function algorithmInterface();
}