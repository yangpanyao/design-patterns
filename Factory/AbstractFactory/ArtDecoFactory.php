<?php
namespace DesignPatterns\Factory\AbstractFactory;

/**
 * 装饰风艺术风格的工厂
 * 具体工厂角色
 * Class ArtDecoFactory
 * @package DesignPatterns\Factory\AbstractFactory
 */
class ArtDecoFactory implements Factory
{

    public function createChair()
    {
        return new ArtDecoChair();
    }

    public function createSofa()
    {
        return new ArtDecoSofa();
    }

    public function createCoffeeTable()
    {
        return new ArtDecoCoffeeTable();
    }
}