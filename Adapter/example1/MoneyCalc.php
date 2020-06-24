<?php
namespace DesignPatterns\Adapter\example1;
class MoneyCalc
{
    private $money;//金额 默认人民币
    private $product;//软件产品
    private $service;//软件服务
    public $rate = 1;//兑换率

    public function requestCalc($productNow,$serviceNow)
    {
        $this->product = $productNow;
        $this->service = $serviceNow;
        $this->money = $this->product + $this->service;
        return $this->requestTotal();

    }
    public function requestTotal()
    {
        $this->money *= $this->rate;
        return $this->money;
    }
}