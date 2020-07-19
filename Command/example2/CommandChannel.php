<?php
namespace DesignPatterns\Command\example2;
/**
 * 切换频道命令
 * Class CommandChannel
 * @package DesignPatterns\Command\example2
 */

class CommandChannel implements Command
{
    private $tv;
    private $channel;

    public function __construct($tv,$channel)
    {
        $this->tv=$tv;
        $this->channel=$channel;
    }

    public function execute()
    {
        $this->tv->turnChannel($this->channel);
    }

}