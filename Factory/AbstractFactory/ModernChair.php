<?php
namespace DesignPatterns\Factory\AbstractFactory;

/**
 * 现代风格的椅子
 * 具体产品角色
 * Class ModernChair
 * @package DesignPatterns\Factory\AbstractFactory
 */
class ModernChair implements Chair
{

    public function produce()
    {
        echo '生产现代风格的椅子';
    }

}