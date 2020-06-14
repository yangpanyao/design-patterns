<?php
namespace DesignPatterns\Factory\AbstractFactory;
/**
 * 椅子产品接口
 * 抽象产品角色
 * Interface Chair
 * @package DesignPatterns\Factory\AbstractFactoty
 */
interface Chair
{
    /**
     * 生产
     * @return mixed
     */
    public function produce();

}