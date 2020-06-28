<?php
namespace DesignPatterns\Flyweight\example2\v3;
/**
 * 网站抽象类
 * Class WebSite
 * @package DesignPatterns\Flyweight\example2\v3
 */
abstract class WebSite
{
    abstract public function use(User $user);
}