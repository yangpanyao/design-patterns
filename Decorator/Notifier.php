<?php
namespace DesignPatterns\Decorator;
/**
 * 具体构件角色concrete component
 * 这里我们不需要使用抽象component（抽象构件），所以只需要使用具体构件（concrete component）
 * 让装饰角色直接继承具体构件（concrete component），如果只需要一个具体装饰角色（concrete decorator），
 * 那么我们也可以将装饰角色（decorator）和具体装饰角色（concrete decorator）的责任合成一个类
 * Class Notifier
 * @package DesignPatterns\Decorator
 */
class Notifier
{
    public function send(){
        echo '发送邮件通知';
    }
}