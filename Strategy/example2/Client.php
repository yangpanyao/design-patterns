<?php
namespace DesignPatterns\Strategy\example2;
require dirname(__DIR__).'/../vendor/autoload.php';
class Client
{
    public function run($type){
        switch ($type){
            case 'bike':
                $TravelStrategy = new Context(new BikeStrategy());
                break;
            case 'transit':
                $TravelStrategy = new Context(new TransitStrategy());
                break;
            case 'taxi':
                $TravelStrategy = new Context(new TaxiStrategy());
                break;
            default:
                throw new \Exception("不支持的方式");
                break;
        }
        $TravelStrategy->ContextInterface();
    }
}
$worker = new Client();
$worker->run('bike');