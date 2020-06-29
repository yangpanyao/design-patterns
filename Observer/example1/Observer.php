<?php
namespace DesignPatterns\Observer\example1;
/**
 * Observer类，抽象观察者，为所有的具体观察者定义一一个接口，在得到主题的通知时更新自己。
 * 这个接口叫做更新接口。抽象观察者一-般用一 一个抽象类或者一 一个 接口实现。
 * 更新接口通常包含一个Update()方法，这个方法叫做更新方法。
 * Class Observer
 * @package DesignPatterns\Observer\example1
 */
abstract class Observer
{
    abstract public function update();
}