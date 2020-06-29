<?php
namespace DesignPatterns\Observer\example2;
/**
 * 具体观察者
 * Class ConcreteObserver
 * @package DesignPatterns\Observer\example2
 */
class ConcreteObserver implements \SplObserver
{
    private $name;
    private $subject;

    public function __construct(\SplSubject $subject,$name)
    {
        $this->subject = $subject;
        $this->name = $name;
    }

    public function update(\SplSubject $subject)
    {
        echo "观察者".$this->name."的新状态是".$subject->getSubjectState()."<br>";
    }
}