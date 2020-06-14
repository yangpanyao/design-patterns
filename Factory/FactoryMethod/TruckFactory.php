<?php
namespace DesignPatterns\Factory\FactoryMethod;
/**
 * 具体工厂角色
 * Class TruckFactory
 * @package DesignPattern\Factory\FactoryMethod
 */
class TruckFactory implements Factory
{
    public function createTransport()
    {
        return new Truck();
    }
}