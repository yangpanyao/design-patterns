<?php
namespace DesignPatterns\Mediator\example1;
require dirname(__DIR__).'/../vendor/autoload.php';
class Client
{
    public function run()
    {
        $m = new ConcreteMediator();
        //让两个具体同事类认识中介者对象
        $c1 = new ConcreteColleague1($m);
        $c2 = new ConcreteColleague2($m);
        //让中介者认识各个具体同事类对象
        $m->setColleague1($c1);
        $m->setColleague2($c2);
        //具体同事类对象的发送信息都是通过中介者转发
        $c1->Send("吃过饭了吗？");
        $c2->Send("没有呢，你打算请客吗？");
    }
}
$worker = new Client();
$worker->run();