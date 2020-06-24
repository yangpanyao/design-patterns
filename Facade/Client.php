<?php
namespace DesignPatterns\Facade;
require __DIR__.'/../vendor/autoload.php';
class Client
{
    public function run()
    {
        $facade = new Facade();
        $facade->methodA();
        echo '<br>';
        $facade->methodB();
    }

}
$worker = new Client();
$worker->run();