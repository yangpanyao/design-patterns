<?php
namespace DesignPatterns\Command\example2;
/**
 * 命令接收者
 * Class Tv
 * @package DesignPatterns\Command\example2
 */
class Tv
{
    public $curr_channel=0;

    /**
     * 打开电视机
     */
    public function turnOn()
    {
        echo "The television is on."."<br/>";
    }

    /**
     * 关闭电视机
     */
    public function turnOff()
    {
        echo "The television is off."."<br/>";
    }

    /**切换频道
     * @param $channel    频道
     */
    public function turnChannel($channel)
    {
        $this->curr_channel=$channel;
        echo "This TV Channel is ".$this->curr_channel."<br/>";
    }

}