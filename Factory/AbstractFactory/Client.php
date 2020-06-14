<?php
namespace DesignPatterns\Factory\AbstractFactory;
require dirname(__DIR__).'/../vendor/autoload.php';
//client
class Client
{

    public function run(){
        //创建现代风格的产品
        $factory = new ModernFactory();
        $chair = $factory->createChair();
        $chair->produce();
        echo '<br>';
        $sofa = $factory->createSofa();
        $sofa->produce();
        echo '<br>';
        $coffeetable  = $factory->createCoffeeTable();
        $coffeetable->produce();

    }
}

$client = new Client();
$client->run();