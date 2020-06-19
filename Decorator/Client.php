<?php
namespace DesignPatterns\Decorator;
require __DIR__.'/../vendor/autoload.php';
class Client{
    public function run()
    {
        $notifier = new Notifier();
        $notifier->send();
        echo '<br>';
        $smsdecorator  = new SMSDecorator($notifier);
        $smsdecorator->send();
        echo '<br>';
        $qqdecorator = new QQDecorator($notifier);
        $qqdecorator->send();
        echo '<br>';
        $wechatdecorator = new WeChatDecorator($notifier);
        $wechatdecorator->send();
    }
}
$client  = new Client();
$client->run();