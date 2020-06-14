<?php
namespace DesignPatterns\Factory\AbstractFactory;

/**
 * 现代风格的咖啡桌
 * 具体产品角色
 * Class ModernCoffeeTable
 * @package DesignPatterns\Factory\AbstractFactory
 */
class ModernCoffeeTable implements CoffeeTable
{

    public function produce()
    {
        echo '生产现代风格的咖啡桌';
    }

}