<?php
namespace DesignPatterns\Factory\AbstractFactory;

/**
 * 维多利亚风格的咖啡桌
 * 具体产品角色
 * Class VictorianCoffeeTable
 * @package DesignPatterns\Factory\AbstractFactory
 */
class VictorianCoffeeTable implements CoffeeTable
{

    public function produce()
    {
        echo '生产维多利亚风格的咖啡桌';
    }

}