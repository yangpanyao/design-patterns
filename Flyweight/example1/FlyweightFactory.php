<?php
namespace DesignPatterns\Flyweight\example1;
/**
 * FlyweightFactory 是一个亨元工厂用来创建并管理Flyweight对象它主要用来确保
 * 合理的共享Flyweight，当用户请求Flyweight时，FlyweightFactory对象提供一个已经创建的实例或者创建一个
 * Class FlyweightFactory
 * @package DesignPatterns\Flyweight\example
 */
class FlyweightFactory
{
    private $flyweights = [];

    public function __construct()
    {
        //初始化是先生成三个实例
        $this->flyweights['X'] = new ConcreteFlyweight();
        $this->flyweights['Y'] = new ConcreteFlyweight();
        $this->flyweights['Z'] = new ConcreteFlyweight();
    }
    //根据客户端的请求获取已请求的实例
    public function GetFlyweight($key)
    {
        return $this->flyweights[$key];
    }
}