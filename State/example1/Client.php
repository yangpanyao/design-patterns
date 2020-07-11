<?php
namespace DesignPatterns\State\example1;
require dirname(__DIR__).'/../vendor/autoload.php';
class Client
{

    public function run()
    {
         $context = new Context(new ConcreteStateA());
         $context->request();
         $context->request();
         $context->request();
         $context->request();
    }
}

$worker = new Client();
$worker->run();