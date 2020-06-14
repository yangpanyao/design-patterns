<?php
namespace DesignPatterns\Factory\AbstractFactory;

/**
 * 沙发产品接口
 * 抽象产品角色
 * Interface Sofa
 * @package DesignPatterns\Factory\AbstractFactory
 */
interface Sofa
{
    /**
     * 生产
     */
    public function produce();
}