<?php
namespace DesignPatterns\Factory\SimpleFactory;

require dirname(__DIR__).'/../vendor/autoload.php';
/**
 * 工厂角色
 * Class Factory
 * @package DesignPatterns\Factory\SimpleFactory
 */
class Factory
{
    /**
     * @param $type
     * @return Ship|Truck
     * @throws \Exception
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