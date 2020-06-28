<?php
namespace DesignPatterns\Flyweight\example2\v3;
/**
 * 具体网站类
 * Class ConcreteWebSite
 * @package DesignPatterns\Flyweight\example2\v3
 */
class ConcreteWebSite extends WebSite
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function use(User $user)
    {
        echo "网站分类: ".$this->name." 用户： ".$user->getName()."<br>";
    }
}