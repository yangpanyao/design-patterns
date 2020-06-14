<?php
namespace DesignPatterns\Factory\SimpleFactory;
/**
 * 具体产品角色
 * 卡车运输类
 * Class Truck
 * @package DesignPatterns\Factory\SimpleFactory
 */
class Truck implements Transport
{
    public function deliver()
    {
        return "使用卡车运输";
    }
}