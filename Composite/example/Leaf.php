<?php
namespace DesignPatterns\Composite\example;
/**
 * leaf在组合中表示叶节点对象，叶节点对象没有子节点。
 * Class Leaf
 * @package DesignPatterns\Composite\example
 */
class Leaf extends Component
{
    // 由于叶子没有再增加分枝和树叶，所以add和remove方法实现它没有意义，
    // 但这样做可以消除叶节点和枝节点对象在抽象层次的区别，它们具有完全一致的接口
    public function Add(Component $component)
    {
        echo "can not add to a leaf<br>";
    }

    public function Remove(Component $component)
    {
        echo "can not remove to a leaf<br>";
    }

    public function Display(int $depth)
    {
        echo str_repeat('-', $depth) . $this->name . "<br>";
    }
}