<?php
namespace DesignPatterns\Bridge;
/**
 * 具体实现角色
 * 手机音乐
 * Class HandsetMusic
 * @package DesignPatterns\Bridge
 */
class HandsetMusic extends HandsetSoft
{
    public function run()
    {
        return '运行手机音乐';
    }
}
