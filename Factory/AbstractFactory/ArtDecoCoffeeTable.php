<?php
namespace DesignPatterns\Factory\AbstractFactory;

/**
 * 装饰风艺术风格的咖啡桌
 * Class ArtDecoCoffeeTable
 * @package DesignPattern\Factory\AbstractFactory
 */
class ArtDecoCoffeeTable implements CoffeeTable
{

    public function produce()
    {
        echo '生产装饰风艺术风格的咖啡桌';
    }
}