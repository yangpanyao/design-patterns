<?php
namespace DesignPatterns\Factory\AbstractFactory;

/**
 * 咖啡桌产品接口
 * 抽象产品角色
 * Interface CoffeeTable
 * @package DesignPatterns\Factory\AbstractFactory
 */
interface CoffeeTable
{
    /**
     * 生产
     */
    public function produce();
}