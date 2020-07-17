<?php
namespace DesignPatterns\Memento\example;
require dirname(__DIR__).'/../vendor/autoload.php';
class Client
{
    public function run()
    {
        $originator = new Originator();
        $originator->setState('on');//Originator 初始状态为on
        $originator->show();

        //保存状态时，由于有了很好的封装，可以隐藏Originator的实现细节
        $caretaker = new Caretaker();
        $caretaker->setMemento($originator->CreateMemento());
        //更改状态属性为off
        $originator->setState('off');
        $originator->show();

        $originator->setMemento($caretaker->getMemento());
        $originator->show();



    }
}
$worker = new Client();
$worker->run();