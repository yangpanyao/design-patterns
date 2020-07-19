<?php
namespace DesignPatterns\Command\example1;
require dirname(__DIR__).'/../vendor/autoload.php';
class Client
{
    public function run()
    {
        $receiver = new Receiver();
        $command = new ConcreteCommand($receiver);
        $invoker = new Invoker();

        $invoker->setCommand($command);
        $invoker->ExecuteCommand();


    }
}
$worker = new Client();
$worker->run();