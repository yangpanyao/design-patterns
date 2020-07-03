<?php
namespace DesignPatterns\Strategy\example1;
require dirname(__DIR__).'/../vendor/autoload.php';
class Client
{
    public function run()
    {
        //由于示例不用的策略最终在调用ContextInterface()所获的的结果也不尽相同
        $contextA = new Context(new ConcreteStrategyA());
        $contextA->ContextInterface();
        echo '<br>';

        $contextB = new Context(new ConcreteStrategyB());
        $contextB->ContextInterface();
        echo '<br>';

        $contextC = new Context(new ConcreteStrategyC());
        $contextC->ContextInterface();

    }

}
$worker = new Client();
$worker->run();