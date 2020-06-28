<?php
namespace DesignPatterns\Flyweight\example2\v3;
/**
 * 用户类，用于网站的客户账号，是“网站”类的外部状态
 * Class User
 * @package DesignPatterns\Flyweight\example2\v3
 */
class User
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}