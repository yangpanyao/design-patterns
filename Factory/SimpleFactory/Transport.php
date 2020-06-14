<?php
namespace DesignPatterns\Factory\SimpleFactory;
/**
 * 抽象产品角色
 * 运输接口
 * Interface Transport
 * @package DesignPatterns\Factory\SimpleFactory
 */
interface Transport
{
    public function deliver();
}