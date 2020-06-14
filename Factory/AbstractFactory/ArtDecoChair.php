<?php
namespace DesignPatterns\Factory\AbstractFactory;

/**
 * 装饰风艺术风格的椅子
 * Class ArtDecoChair
 * @package DesignPattern\Factory\AbstractFactory
 */
class ArtDecoChair implements Chair
{

    public function produce()
    {
        echo '生产装饰风艺术风格的椅子';
    }
}