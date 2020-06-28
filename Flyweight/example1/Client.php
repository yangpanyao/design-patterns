<?php
namespace DesignPatterns\Flyweight\example1;
require dirname(__DIR__).'/../vendor/autoload.php';
/**
 * Class Client
 * @package DesignPatterns\Flyweight\example
 */
class Client
{

    public function run()
    {
        $extrinsicstate = 22;
        $FlyweightFactory = new FlyweightFactory();
        $fx = $FlyweightFactory->GetFlyweight('X');
        $fx->Operation(--$extrinsicstate);
        $fy = $FlyweightFactory->GetFlyweight('Y');
        $fy->Operation(--$extrinsicstate);
        $fz = $FlyweightFactory->GetFlyweight('Z');
        $fz->Operation(--$extrinsicstate);

        $UnsharedConcreteFlyweight = new UnsharedConcreteFlyweight();
        $UnsharedConcreteFlyweight->Operation(--$extrinsicstate);
    }
}
$worker = new Client();
$worker->run();