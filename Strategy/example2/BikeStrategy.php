<?php
namespace DesignPatterns\Strategy\example2;
/**
 * 自行车出行子类
 * Class BikeStrategy
 * @package DesignPatterns\Strategy\example2
 */
class BikeStrategy extends Strategy
{

    public function goAirport()
    {
        echo '骑自行车去机场，需要2个小时，花费0元';
    }
}