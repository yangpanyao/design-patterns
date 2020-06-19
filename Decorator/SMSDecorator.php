<?php
namespace DesignPatterns\Decorator;
class SMSDecorator extends BaseDecorator
{
    public function send()
    {
        parent::send();
        echo ' 发送短信通知';
    }
}