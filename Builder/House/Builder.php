<?php
namespace DesignPatterns\Builder\House;

/**
 * 抽象建造者角色
 *
 * Interface Builder
 * @package DesignPatterns\Builder\House
 */

interface Builder
{
    /**
     * 创建墙壁
     * @return mixed
     */
    public function buildWalls();

    /**
     * 创建房门
     * @return mixed
     */
    public function buildDoors();

    /**
     * 创建窗户
     * @return mixed
     */
    public function buildWindows();

    /**
     * 创建房顶
     * @return mixed
     */
    public function buildRoof();

    /**
     * 创建车库
     * @return mixed
     */
    public function buildGarage();

}