<?php
namespace DesignPatterns\Strategy\example2;

class TaxiStrategy extends Strategy
{
    public function goAirport()
    {
        echo '坐出租车去机场，需要0.5小时，花费30元';
    }

}