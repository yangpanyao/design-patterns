<?php
namespace DesignPatterns\Factory\FactoryMethod;

/**
 * 抽象产品角色
 * 运输接口
 * Interface Transport
 * @package DesignPatterns\Factory\FactoryMethod
 */
interface Transport
{
    public function deliver();
}
/**
 * 具体产品角色
 * 卡车运输类
 * Class Truck
 * @package DesignPatterns\Factory\FactoryMethod
 */
class Truck implements Transport
{
    public function deliver()
    {
        return "使用卡车运输";
    }
}

/**
 * 具体产品角色
 * 轮船运输类
 * Class Ship
 * @package DesignPatterns\Factory\FactoryMethod
 */
class Ship implements Transport
{
    public function deliver()
    {
        return "使用轮船运输";
    }
}

/**
 * 抽象工厂角色
 * Interface Logistics
 * @package DesignPattern\Factory\FactoryMethod
 */
interface Logistics
{
    public function createTransport();
}

/**
 * 具体工厂角色
 * Class TruckLogistics
 * @package DesignPattern\Factory\FactoryMethod
 */
class TruckLogistics implements Logistics
{
    public function createTransport()
    {
        return new Truck();
    }
}

/**
 * 具体工厂角色
 * Class ShipLogistics
 * @package DesignPattern\Factory\FactoryMethod
 */
class ShipLogistics implements Logistics
{
    public function createTransport()
    {
        return new Ship();
    }
}

//client
$logistics = new TruckLogistics();
$deliver = $logistics->createTransport();
echo $deliver->deliver();
echo "<br>";
$logistics = new ShipLogistics();
$deliver = $logistics->createTransport();
echo $deliver->deliver();
