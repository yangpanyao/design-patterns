<?php
namespace DesignPatterns\Factory\SimpleFactory;
/**
 * 具体产品角色
 * 轮船运输类
 * Class Ship
 * @package DesignPatterns\Factory\SimpleFactory
 */
class Ship implements Transport
{
    public function deliver()
    {
        return "使用轮船运输";
    }
}