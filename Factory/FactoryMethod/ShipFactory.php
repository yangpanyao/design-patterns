<?php
namespace DesignPatterns\Factory\FactoryMethod;
/**
 * 具体工厂角色
 * Class ShipFactory
 * @package DesignPattern\Factory\FactoryMethod
 */
class ShipFactory implements Factory
{
    public function createTransport()
    {
        return new Ship();
    }
}