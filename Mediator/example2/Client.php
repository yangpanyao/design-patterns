<?php
namespace DesignPatterns\Mediator\example2;
require dirname(__DIR__).'/../vendor/autoload.php';
/**
 * Class Client
 * @package DesignPatterns\Mediator\example2
 */
class Client
{
    public function run()
    {
        //实例化固话
        $phone = new PhoneColleague();
        $telePhone = new TelephoneColleague();
        $mediator = new Mediator();
        //注册号码
        $mediator->register('6668688',$phone);
        $mediator->register('15612341234',$telePhone);

        //通话
        $phone->sendMsg('15612341234','hello world');
        $telePhone->sendMsg('6668688','请讲普通话');
        $telePhone->sendMsg('6668688','请讲普通话');
    }
}

$worker = new Client();
$worker->run();