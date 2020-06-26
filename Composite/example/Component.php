<?php
namespace DesignPatterns\Composite\example;
/**
 * Component为组合中对象声明的接口，在适当的情况下，实现所有类共有接口的默认行为。声明一个接口
 * 用于访问和管理component的子部件。
 * Class Component
 * @package DesignPatterns\Composite\example
 */
abstract class Component
{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    //通常用add和remove方法来提供增加或移除树枝货树叶的功能
    abstract public function Add(Component $component);
    abstract public function Remove(Component $component);
    abstract public function Display(int $depth);
}