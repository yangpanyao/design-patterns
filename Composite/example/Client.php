<?php
namespace DesignPatterns\Composite\example;
require dirname(__DIR__).'/../vendor/autoload.php';

/**
 * 客户端代码可以通过Component接口操作组合部件（Composite）对象
 * Class Client
 * @package DesignPatterns\Composite\example
 */
class Client
{
    public function run()
    {
        //生成树根root
        //根上长出两页 Leaf A 和 Leaf B
        $root = new Composite('root');
        $root->add(new Leaf("Leaf A"));
        $root->add(new Leaf("Leaf B"));

        //根上长出分支Composite X
        //分枝上也有两叶 Leaf XA 和 LeafX B
        $comp = new Composite("Composite X");
        $comp->add(new Leaf("Leaf XA"));
        $comp->add(new Leaf("Leaf XB"));
        $root->add($comp);
        //在Composite 在长出 CompositeXY分枝 分枝上也有两叶 Leaf XYA 和 LeafXYB
        $comp2 = new Composite("Composite XY");
        $comp2->add(new Leaf("Leaf XYA"));
        $comp2->add(new Leaf("Leaf XYB"));
        $comp->add($comp2);

        $root->add(new  Leaf("Leaf C"));//根部分枝Leaf C
        $leaf = new Leaf("Leaf D");
        $root->add($leaf);//根部分枝Leaf D
        $root->remove($leaf);//移除根部分枝LeafD
        $root->display(1);//显示
    }
}
$worker = new Client();
$worker->run();