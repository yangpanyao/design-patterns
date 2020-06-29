<?php
namespace DesignPatterns\Observer\example1;
/**
 * Subject类，可翻译为主题或抽象通知者，- -般用-一个抽象类或者- -一个接口实现。它把所有对观察者
 * 对象的引用保存在一一个聚集里，每个主题都可以有任何数量的观察者。抽象主题提供一一个接口， 可以增
 * 加和删除观察者对象。
 * Class Subject
 * @package DesignPatterns\Observer\example1
 */
abstract class Subject
{
    private $observers = [];
    //增加观察者
    public function attach(Observer $observer)
    {
        array_push($this->observers,$observer);
    }
    //移除观察者
    public function detach(Observer $observer)
    {
        foreach ($this->observers as $key =>$value){
            if ($observer == $value){
                unset($this->observers[$key]);
            }
        }
    }
    //通知
    public function notify()
    {
        foreach ($this->observers as $observer){
            $observer->update();
        }
    }

}