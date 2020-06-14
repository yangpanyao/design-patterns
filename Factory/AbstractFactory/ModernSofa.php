<?php
namespace DesignPatterns\Factory\AbstractFactory;

/**
 * 现代风格的沙发
 * 具体产品角色
 * Class ModernSofa
 * @package DesignPatterns\Factory\AbstractFactory
 */
class ModernSofa implements Sofa
{

    public function produce()
    {
        echo '生产现代风格的沙发';
    }

}