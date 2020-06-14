<?php
namespace DesignPatterns\Factory\AbstractFactory;

/**
 * 装饰风艺术风格的沙发
 * Class ArtDecoSofa
 * @package DesignPattern\Factory\AbstractFactory
 */
class ArtDecoSofa implements Sofa
{

    public function produce()
    {
        echo '生产装饰风艺术风格的沙发';
    }
}