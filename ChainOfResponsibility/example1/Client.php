<?php
namespace DesignPatterns\ChainOfResponsibility\example1;
require dirname(__DIR__).'/../vendor/autoload.php';
class Client
{
    public function run()
    {
        $h1 = new ConcreteHandlerA();
        $h2 = new ConcreteHandlerB();
        $h3 = new ConcreteHandlerC();
        //设置职责链的上家下家
        $h1->setSuccessor($h2);
        $h2->setSuccessor($h3);
        $requests = [2,5,14,22,18,3,27,20];
        //循环给最小处理者提交请求，不同的数额，由不同权限处理者处理
        foreach ($requests as $value) {
            $h1->HandleRequest($value);
        }
    }
}
$worker = new Client();
$worker->run();