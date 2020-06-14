<?php
namespace DesignPatterns\Factory\FactoryMethod;
/**
 * 抽象工厂角色
 * Interface Factory
 * @package DesignPattern\Factory\FactoryMethod
 */
interface Factory
{
    public function createTransport();
}