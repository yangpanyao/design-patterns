<?php
namespace DesignPatterns\Bridge;
/**
 * 精确抽象角色
 * 手机品牌N
 * Class HandsetBrandN
 * @package DesignPatterns\Bridge
 */
class HandsetBrandN extends HandsetBrand
{
    public function run()
    {
        echo '手机品牌N'.$this->soft->run()."<br>";
    }
}