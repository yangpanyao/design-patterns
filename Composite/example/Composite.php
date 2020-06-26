<?php
namespace DesignPatterns\Composite\example;
/**
 * composite定义有枝节点行为，用来存储子部件，
 * 在Component接口中实现与子部件有关的操作，比如增加add和删除remove.
 * Class Composite
 * @package DesignPatterns\Composite\example
 */
class Composite extends Component
{
    private $childern = [];//一个子对象集合用来存储其下属的枝节点和叶节点。
    public function Add(Component $component)
    {
        array_push($this->childern, $component);
    }

    public function Remove(Component $component)
    {
        foreach ($this->childern as $key => $value) {
            if ($component === $value) {
                unset($this->childern[$key]);
            }
        }
    }
    // 显示其枝节点名称，并对其下级进行遍历
    public function Display(int $depth)
    {
        echo str_repeat('-', $depth).$this->name."<br>";
        foreach ($this->childern as $component) {
            $component->display($depth + 2);
        }
    }
}