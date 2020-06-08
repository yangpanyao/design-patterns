<?php
namespace DesignPatterns\Factory\SimpleFactory;
/**
 * 抽象产品角色
 * 运输接口
 * Interface Transport
 * @package DesignPatterns\Factory\SimpleFactory
 */
interface Transport{
    public function deliver();
}
/**
 * 具体产品角色
 * 卡车运输类
 * Class Truck
 * @package DesignPatterns\Factory\SimpleFactory
 */
class Truck implements Transport {
    public function deliver()
    {
        return "使用卡车运输";
    }
}

/**
 * 具体产品角色
 * 轮船运输类
 * Class Ship
 * @package DesignPatterns\Factory\SimpleFactory
 */
class Ship implements Transport{
    public function deliver()
    {
        return "使用轮船运输";
    }
}

/**
 * 工厂角色
 * Class Logistics
 * @package DesignPatterns\Factory\SimpleFactory
 */
class Logistics{
    /**
     * @param $type
     */
    public static function createTransport($type)
    {
        switch ($type){
            case 'truck':
                return new Truck();
            case 'ship':
                return new Ship();
            default:
                throw new \Exception("暂不支持的运输方式");
        }
    }
}

//client
$logistics = Logistics::createTransport('truck');
echo $logistics->deliver();
echo "<br/>";
$logistics = Logistics::createTransport('ship');
echo $logistics->deliver();