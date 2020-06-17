<?php
namespace DesignPatterns\Bridge;
/**
 * 精确抽象角色
 * 手机品牌m
 * Class HandsetBrandM
 * @package DesignPatterns\Bridge
 */
class HandsetBrandM extends HandsetBrand
{
    public function run()
    {
        echo '手机品牌M'.$this->soft->run()."<br>";
    }
}