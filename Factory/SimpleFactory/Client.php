<?php
namespace DesignPatterns\Factory\SimpleFactory;

require dirname(__DIR__).'/../vendor/autoload.php';
class Client
{
    public function run(){
        //client
        $logistics = Factory::createTransport('truck');
        echo $logistics->deliver();
        echo "<br/>";
        $logistics = Factory::createTransport('ship');
        echo $logistics->deliver();
    }
}
$client = new Client();
$client->run();