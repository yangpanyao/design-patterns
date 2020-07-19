<?php
namespace DesignPatterns\Command\example2;
/**
 * 遥控器 命令发起者
 * Class Control
 * @package DesignPatterns\Command\example2
 */
class Control
{
    private $_onCommand;
    private $_offCommand;
    private $_changeChannel;

    public function __construct($on,$off,$channel)
    {
        $this->_onCommand = $on;
        $this->_offCommand = $off;
        $this->_changeChannel = $channel;
    }

    public function turnOn()
    {
        $this->_onCommand->execute();
    }

    public function  turnOff()
    {
        $this->_offCommand->execute();
    }

    public function changeChannel()
    {
        $this->_changeChannel->execute();
    }
}