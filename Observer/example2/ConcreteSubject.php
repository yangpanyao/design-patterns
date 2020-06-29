<?php
namespace DesignPatterns\Observer\example2;
/**
 * Class ConcreteSubject
 * @package DesignPatterns\Observer\example2
 */
class ConcreteSubject implements \SplSubject
{
    protected $subjectState;
    protected $observer;
    public function __construct()
    {
        $this->observer = new \SplObjectStorage();
    }
    //增加观察者
    public function attach(\SplObserver $observer)
    {
        $this->observer->attach($observer);
    }
    //删除观察者
    public function detach(\SplObserver $observer)
    {
        $this->observer->detach($observer);
    }
    //通知
    public function notify()
    {
        foreach ($this->observer as $observer){
            $observer->update($this);
        }
    }

    /**
     * @param mixed $subjectState
     */
    public function setSubjectState($subjectState): void
    {
        $this->subjectState = $subjectState;
    }

    /**
     * @return mixed
     */
    public function getSubjectState()
    {
        return $this->subjectState;
    }
}