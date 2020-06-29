<?php
namespace DesignPatterns\Observer\example1;
/**
 * ConcreteObserver类，具体观察者，实现抽象观察者角色所要求的更新接口，以便使本身的状态与
 * 主题的状态相协调。具体观察者角色可以保存一个指向具体主题对象的引用。具体观察者角色通常用一个具体子类实现。
 * Class ConcreteObserver
 * @package DesignPatterns\Observer\example1
 */
class ConcreteObserver extends Observer
{
    private $name;
    private $observerState;
    private $subject;

    public function __construct(ConcreteSubject $subject,$name)
    {
        $this->subject = $subject;
        $this->name = $name;
    }

    public function update()
    {
        echo "观察者".$this->name."的新状态是".$this->subject->getSubjectState()."<br>";
    }
}