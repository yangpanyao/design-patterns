<?php
namespace DesignPatterns\Observer\example1;
/**
 * ConcreteSubject类，叫做具体主题或具体通知者，将有关状态存入具体现察者对象;在具体主题的
 * 内部状态改变时，给所有登记过的观察者发出通知。具体主题角色通常用一个具体子类实现。
 * Class ConcreteSubject
 * @package DesignPatterns\Observer\example1
 */
class ConcreteSubject extends Subject
{
    private $subjectState;

    /**
     * @return mixed
     */
    public function getSubjectState()
    {
        return $this->subjectState;
    }

    /**
     * @param mixed $subjectState
     */
    public function setSubjectState($subjectState): void
    {
        $this->subjectState = $subjectState;
    }
}