<?php
namespace DesignPatterns\Memento\example;
/**
 * 管理者类
 * Class Caretaker
 * @package DesignPatterns\Memento\example
 */
class Caretaker
{
    private $memento;
    //获取或者设置备忘录
    /**
     * @return mixed
     */
    public function getMemento()
    {
        return $this->memento;
    }

    /**
     * @param mixed $memento
     */
    public function setMemento($memento): void
    {
        $this->memento = $memento;
    }
}