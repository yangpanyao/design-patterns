<?php
namespace DesignPatterns\Builder\House;

/**
 * 具体建造者角色
 * 普通房屋
 * Class HouseBuilder
 * @package DesignPatterns\Builder\House
 */
class HouseBuilder implements Builder{
    private $house;

    /**
     * 新的生成器实例应包含一个空的产品对象，即用于进一步组装。
     */
    public function __construct()
    {
        $this->reset();
    }
    public function reset():void
    {
        $this->house = new House;
    }

    /**
     * @return mixed|void
     */
    public function buildWalls():void
    {
        $this->house->parts[] = "创建墙壁";
    }

    /**
     * @return mixed|void
     */
    public function buildDoors()
    {
        $this->house->parts[] = "创建房门";
    }

    /**
     * @return mixed|void
     */
    public function buildWindows()
    {
        $this->house->parts[] = "创建窗户";
    }

    /**
     * @return mixed|void
     */
    public function buildRoof()
    {
        $this->house->parts[] = "创建房顶";
    }

    /**
     * @return mixed|void
     */
    public function buildGarage()
    {
        $this->house->parts[] = "创建车库";
    }

    /**
     * @return mixed
     */
    public function getHouse(){
        $result = $this->house;
        $this->reset();
        return $result;
    }
}