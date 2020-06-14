<?php
namespace DesignPatterns\Factory\AbstractFactory;

/**
 * 抽象工厂角色
 * Interface Factory
 * @package DesignPatterns\Factory\AbstractFactory
 */
interface Factory
{
    /**
     * 创建椅子产品
     * @return mixed
     */
    public function createChair();

    /**
     * 创建沙发产品
     * @return mixed
     */
    public function createSofa();
    /**
     * 创建咖啡桌产品
     */
    public function createCoffeeTable();
}