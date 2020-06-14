<?php
//namespace DesignPatterns\Factory\AbstractFactory;
//
///**
// * 椅子产品接口
// * 抽象产品角色
// * Interface Chair
// * @package DesignPatterns\Factory\AbstractFactoty
// */
//interface Chair{
//    /**
//     * 生产
//     * @return mixed
//     */
//    public function produce();
//
//}
//
//
///**
// * 现代风格的椅子
// * 具体产品角色
// * Class ModernChair
// * @package DesignPatterns\Factory\AbstractFactory
// */
//class ModernChair implements Chair{
//
//    public function produce()
//    {
//        echo '生产现代风格的椅子';
//    }
//
//}
//
///**
// * 维多利亚风格的椅子
// * 具体产品角色
// * Class VictorianChair
// * @package DesignPatterns\Factory\AbstractFactory
// */
//class VictorianChair implements Chair{
//
//    public function produce()
//    {
//        echo '生产维多利亚风格的椅子';
//    }
//
//}
//
///**
// * 装饰风艺术风格的椅子
// * Class ArtDecoChair
// * @package DesignPattern\Factory\AbstractFactory
// */
//class ArtDecoChair implements Chair{
//
//    public function produce()
//    {
//        echo '生产装饰风艺术风格的椅子';
//    }
//}
//
///**
// * 沙发产品接口
// * 抽象产品角色
// * Interface Sofa
// * @package DesignPatterns\Factory\AbstractFactory
// */
//interface Sofa{
//    /**
//     * 生产
//     */
//    public function produce();
//}
//
///**
// * 现代风格的沙发
// * 具体产品角色
// * Class ModernSofa
// * @package DesignPatterns\Factory\AbstractFactory
// */
//class ModernSofa implements Sofa {
//
//    public function produce()
//    {
//        echo '生产现代风格的沙发';
//    }
//
//}
//
///**
// * 维多利亚风格的沙发
// * 具体产品角色
// * Class VictorianSofa
// * @package DesignPatterns\Factory\AbstractFactory
// */
//class VictorianSofa implements Sofa{
//
//    public function produce()
//    {
//        echo '生产维多利亚风格的沙发';
//    }
//
//}
//
///**
// * 装饰风艺术风格的沙发
// * Class ArtDecoSofa
// * @package DesignPattern\Factory\AbstractFactory
// */
//class ArtDecoSofa implements Sofa{
//
//    public function produce()
//    {
//        echo '生产装饰风艺术风格的沙发';
//    }
//}
//
///**
// * 咖啡桌产品接口
// * 抽象产品角色
// * Interface CoffeeTable
// * @package DesignPatterns\Factory\AbstractFactory
// */
//interface CoffeeTable{
//    /**
//     * 生产
//     */
//    public function produce();
//}
//
///**
// * 现代风格的咖啡桌
// * 具体产品角色
// * Class ModernCoffeeTable
// * @package DesignPatterns\Factory\AbstractFactory
// */
//class ModernCoffeeTable implements CoffeeTable {
//
//    public function produce()
//    {
//        echo '生产现代风格的咖啡桌';
//    }
//
//}
//
///**
// * 维多利亚风格的咖啡桌
// * 具体产品角色
// * Class VictorianCoffeeTable
// * @package DesignPatterns\Factory\AbstractFactory
// */
//class VictorianCoffeeTable implements CoffeeTable{
//
//    public function produce()
//    {
//        echo '生产维多利亚风格的咖啡桌';
//    }
//
//}
//
///**
// * 装饰风艺术风格的咖啡桌
// * Class ArtDecoCoffeeTable
// * @package DesignPattern\Factory\AbstractFactory
// */
//class ArtDecoCoffeeTable implements CoffeeTable{
//
//    public function produce()
//    {
//        echo '生产装饰风艺术风格的咖啡桌';
//    }
//}
//
///**
// * 抽象工厂角色
// * Interface Factory
// * @package DesignPatterns\Factory\AbstractFactory
// */
//interface Factory{
//    /**
//     * 创建椅子产品
//     * @return mixed
//     */
//    public function createChair();
//
//    /**
//     * 创建沙发产品
//     * @return mixed
//     */
//    public function createSofa();
//    /**
//     * 创建咖啡桌产品
//     */
//    public function createCoffeeTable();
//}
//
///**
// * 现代风格工厂
// * 具体工厂角色
// * Class ModernFactory
// * @package DesignPatterns\Factory\AbstractFactory
// */
//class ModernFactory implements Factory{
//
//    public function createChair()
//    {
//        return new ModernChair();
//    }
//
//    public function createSofa()
//    {
//       return new ModernSofa();
//    }
//
//    public function createCoffeeTable()
//    {
//        return new ModernCoffeeTable();
//    }
//}
//
///**
// * 维多利亚风格工厂
// * 具体工厂角色
// * Class VictorianFactory
// * @package DesignPatterns\Factory\AbstractFactory
// */
//class VictorianFactory implements Factory{
//   public function createChair()
//   {
//       return new VictorianChair();
//   }
//   public function createSofa()
//   {
//       return new VictorianSofa();
//   }
//   public function createCoffeeTable()
//   {
//       return new VictorianCoffeeTable();
//   }
//
//}
//
///**
// * 装饰风艺术风格的工厂
// * 具体工厂角色
// * Class ArtDecoFactory
// * @package DesignPatterns\Factory\AbstractFactory
// */
//class ArtDecoFactory implements Factory{
//
//    public function createChair()
//    {
//        return new ArtDecoChair();
//    }
//
//    public function createSofa()
//    {
//        return new ArtDecoSofa();
//    }
//
//    public function createCoffeeTable()
//    {
//        return new ArtDecoCoffeeTable();
//    }
//}
//
//
//
////client
//class Client{
//
//    public function run(){
//        //创建现代风格的产品
//        $factory = new ModernFactory();
//        $chair = $factory->createChair();
//        $chair->produce();
//        echo '<br>';
//        $sofa = $factory->createSofa();
//        $sofa->produce();
//        echo '<br>';
//        $coffeetable  = $factory->createCoffeeTable();
//        $coffeetable->produce();
//
//
//
//    }
//}
//
//$client = new Client();
//$client->run();