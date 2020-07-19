<?php
namespace DesignPatterns\Command\example2;
/**
 * 开机命令
 * Class CommandOn
 * @package DesignPatterns\Command\example2
 */
class CommandOn implements Command
{

    private $tv;

    public function __construct($tv)
    {
        $this->tv=$tv;
    }

    public function execute()
    {
        $this->tv->turnOn();
    }
}