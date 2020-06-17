<?php
namespace DesignPatterns\Bridge;
/**
 * 具体实现角色
 * 手机游戏
 * Class HandsetGame
 * @package DesignPatterns\Bridge
 */
class HandsetGame extends HandsetSoft
{
    public function run()
    {
        return '运行手机游戏';
    }
}