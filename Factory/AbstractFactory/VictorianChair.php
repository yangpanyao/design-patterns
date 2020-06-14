<?php
namespace DesignPatterns\Factory\AbstractFactory;

/**
 * 维多利亚风格的椅子
 * 具体产品角色
 * Class VictorianChair
 * @package DesignPatterns\Factory\AbstractFactory
 */
class VictorianChair implements Chair
{

    public function produce()
    {
        echo '生产维多利亚风格的椅子';
    }

}