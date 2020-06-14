<?php
namespace DesignPatterns\Factory\FactoryMethod;

require dirname(__DIR__).'/../vendor/autoload.php';
/**
 * Class Client
 * @package DesignPatterns\Factory\FactoryMethod
 */
class Client
{
    public function run(){
        $logistics = new TruckFactory();
        $deliver = $logistics->createTransport();
        echo $deliver->deliver();
        echo "<br>";
        $logistics = new ShipFactory();
        $deliver = $logistics->createTransport();
        echo $deliver->deliver();
    }
}

$client = new  Client();
$client->run();
