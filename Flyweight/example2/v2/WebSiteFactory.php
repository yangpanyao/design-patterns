<?php
namespace DesignPatterns\Flyweight\example2\v2;
/**
 * 网站工厂类
 * Class WebSiteFactory
 * @package DesignPatterns\Flyweight\example2\v2
 */
class WebSiteFactory
{
    private $flyweights = [];

    //获得网站分类
    public function getWebSiteCategory(string $key)
    {
        //判断是否存在这个对象，如果存在则直接返回。如果不存在，则实例化后在返回
        if (empty($this->flyweights[$key])) {
            $this->flyweights[$key] = new ConcreteWebSite($key);
        }
        return $this->flyweights[$key];
    }
    //获得网站分类总数
    public function getWebSiteCount()
    {
        return count($this->flyweights);
    }
}