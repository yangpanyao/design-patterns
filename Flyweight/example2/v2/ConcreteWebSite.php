<?php
namespace DesignPatterns\Flyweight\example2\v2;
/**
 * 具体网站类
 * Class ConcreteWebSite
 * @package DesignPatterns\Flyweight\example2\v2
 */
class ConcreteWebSite extends WebSite
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function use()
    {
        echo "网站分类: ".$this->name."<br>";
    }
}