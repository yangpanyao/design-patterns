<?php
namespace DesignPatterns\TemplateMethod\example1;
require dirname(__DIR__).'/../vendor/autoload.php';
/**
 * Class Client
 * @package DesignPatterns\TemplateMethod\example1
 */
class Client
{
    public function run(){
        $c = new ConcreteClassA();
        $c->TemplateMethod();
        echo "<br>";
        $c = new ConcreteClassB();
        $c->TemplateMethod();
    }
}
$worker = new Client();
$worker->run();