<?php
namespace DesignPatterns\Factory\FactoryMethod;
/**
 * 具体产品角色
 * 轮船运输类
 * Class Ship
 * @package DesignPatterns\Factory\FactoryMethod
 */
class Ship implements Transport
{
    public function deliver()
    {
        return "使用轮船运输";
    }
}