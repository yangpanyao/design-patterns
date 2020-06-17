<?php
namespace DesignPatterns\Bridge;
/**
 * 具体实现角色
 * 手机通讯录
 * Class HandsetAddressList
 * @package DesignPatterns\Bridge
 */
class HandsetAddressList extends HandsetSoft
{
    public function run()
    {
        return '运行手机通讯录';
    }
}