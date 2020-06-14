<?php
namespace DesignPatterns\Factory\AbstractFactory;

/**
 * 维多利亚风格的沙发
 * 具体产品角色
 * Class VictorianSofa
 * @package DesignPatterns\Factory\AbstractFactory
 */
class VictorianSofa implements Sofa
{

    public function produce()
    {
        echo '生产维多利亚风格的沙发';
    }

}