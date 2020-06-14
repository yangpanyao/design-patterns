<?php
namespace DesignPatterns\Factory\AbstractFactory;

/**
 * 维多利亚风格工厂
 * 具体工厂角色
 * Class VictorianFactory
 * @package DesignPatterns\Factory\AbstractFactory
 */
class VictorianFactory implements Factory
{
    public function createChair()
    {
        return new VictorianChair();
    }
    public function createSofa()
    {
        return new VictorianSofa();
    }
    public function createCoffeeTable()
    {
        return new VictorianCoffeeTable();
    }

}