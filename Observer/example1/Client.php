<?php
namespace DesignPatterns\Observer\example1;
require dirname(__DIR__).'/../vendor/autoload.php';
class Client
{
    public function run()
    {
        $concreteSubject = new ConcreteSubject();
        $concreteSubject->attach(new ConcreteObserver($concreteSubject,"X"));
        $concreteSubject->attach(new ConcreteObserver($concreteSubject,'Y'));
        $z = new ConcreteObserver($concreteSubject,'Z');
        $concreteSubject->attach($z);
        $concreteSubject->detach($z);

        $concreteSubject->setSubjectState("ABC");
        $concreteSubject->notify();

    }
}
$worker = new Client();
$worker->run();