<?php
namespace DesignPatterns\Memento\example;
/**
 * 发起人类
 * Class Originator
 * @package DesignPatterns\Memento\example
 */
class Originator
{
    private $state;

    /**
     * @param mixed $state
     */
    public function setState($state): void
    {
        $this->state = $state;
    }
    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }
    //创建备忘录，将当前需要保存的信息导入并实例化出一个Memento对象
    public function CreateMemento()
    {
      return  new Memento($this->state);
    }
    //恢复备忘录 将Memento导入并恢复相关数据
    public function setMemento(Memento $memento)
    {
        $this->state = $memento->getState();
    }
    //显示数据
    public function show()
    {
        echo 'State:'.$this->state."<br>";
    }
}