<?php
namespace DesignPatterns\Memento\example;
/**
 * 备忘录类
 * Class Memento
 * @package DesignPatterns\Memento\example
 */
class Memento
{
    private $state;
    //构造方法 将相关数据导入
    public function __construct($state)
    {
        $this->state = $state;
    }
    //需要保存的数据可能是多个
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
}