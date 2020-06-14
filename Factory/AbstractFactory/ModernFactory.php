<?php
namespace DesignPatterns\Factory\AbstractFactory;

/**
 * 现代风格工厂
 * 具体工厂角色
 * Class ModernFactory
 * @package DesignPatterns\Factory\AbstractFactory
 */
class ModernFactory implements Factory
{

    public function createChair()
    {
        return new ModernChair();
    }

    public function createSofa()
    {
        return new ModernSofa();
    }

    public function createCoffeeTable()
    {
        return new ModernCoffeeTable();
    }
}