<?php
namespace DesignPatterns\Adapter\example2;

class DollarCalcAdapter implements ITarget
{
    private $moneyCalc;
    public function __construct(MoneyCalc $moneyCalc)
    {
        $this->moneyCalc = $moneyCalc;
        $this->moneyCalc->rate = 0.141;
    }

    public function requestCalc($productNow,$serviceNow)
    {
        return $this->moneyCalc->requestCalc($productNow,$serviceNow);
    }
}
