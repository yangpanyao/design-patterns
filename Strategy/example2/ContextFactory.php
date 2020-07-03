<?php
namespace DesignPatterns\Strategy\example2;
class ContextFactory
{
    private $strategy;
    //
    public function __construct($type)
    {
        switch ($type){
            case 'bike':
                $this->strategy = new BikeStrategy();
                break;
            case 'transit':
                $this->strategy = new TransitStrategy();
                break;
            case 'taxi':
                $this->strategy = new TaxiStrategy();
                break;
            default:
                throw new \Exception("不支持的方式");
                break;
        }
    }
    //根据具体的策略对象调用其算法的方法
    public function ContextInterface()
    {
        $this->strategy->algorithmInterface();
    }

}



