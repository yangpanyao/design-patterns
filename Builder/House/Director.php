<?php
namespace DesignPatterns\Builder\House;
/**
 * 主管 （Director） 类
 * 定义调用构造步骤的顺序，你可以创建和复用特定的产品配置。
 * Class Director
 * @package DesignPatterns\Builder\House
 */
class Director
{
    private $builder;

    /**
     * @param mixed $builder
     */
    public function setBuilder(Builder $builder): void
    {
        $this->builder = $builder;
    }
    public function buildHouse()
    {
        $this->builder->buildWalls();
        $this->builder->buildDoors();
        $this->builder->buildWindows();
        $this->builder->buildRoof();
        $this->builder->buildGarage();
    }
}