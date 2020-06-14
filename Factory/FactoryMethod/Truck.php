<?php
namespace DesignPatterns\Factory\FactoryMethod;

/**
 * 具体产品角色
 * 卡车运输类
 * Class Truck
 * @package DesignPatterns\Factory\FactoryMethod
 */
class Truck implements Transport
{
    public function deliver()
    {
        return "使用卡车运输";
    }
}