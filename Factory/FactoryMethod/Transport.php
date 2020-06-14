<?php
namespace DesignPatterns\Factory\FactoryMethod;
/**
 * 抽象产品角色
 * 运输接口
 * Interface Transport
 * @package DesignPatterns\Factory\FactoryMethod
 */
interface Transport
{
    public function deliver();
}