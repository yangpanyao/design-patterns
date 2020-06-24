<?php
namespace DesignPatterns\Adapter\example1;

class DollarCalcAdapter extends MoneyCalc implements ITarget
{
    public function __construct()
    {
        $this->requester();
    }

    public function requester()
    {
       $this->rate = 0.141;
       return $this->rate;
    }
}