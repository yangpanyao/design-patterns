<?php
namespace DesignPatterns\State\example2\v3;
/**
 * Interface IMario
 * @package DesignPatterns\State\example2\v3
 */
interface IMario
{
    public function getName();
    //获取蘑菇
    public function obtainMushRoom();
    //获取斗篷
    public function obtainCape();
    //获得火焰
    public function obtainFireFlower();
    //遇到怪物
    public function  meetMonster();
}