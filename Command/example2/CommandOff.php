<?php
namespace DesignPatterns\Command\example2;
/**
 * 关机命令
 * Class CommandOff
 * @package DesignPatterns\Command\example2
 */
class CommandOff implements Command
{
    private $tv;

    public function __construct($tv)
    {
        $this->tv=$tv;
    }

    public function execute()
    {
        $this->tv->turnOff();
    }
}