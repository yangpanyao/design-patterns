<?php
namespace DesignPatterns\Strategy\example2;
/**
 * 公交出行子类
 * Class TransitStrategy
 * @package DesignPatterns\Strategy\example2
 */
class TransitStrategy extends Strategy
{

    public function goAirport()
    {
        echo  '坐公交去机场，需要1小时，花费2元';
    }
}