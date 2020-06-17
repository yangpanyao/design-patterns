<?php
namespace DesignPatterns\Bridge;
/**
 * 抽象角色
 * 手机品牌
 * Class HandsetBrand
 * @package DesignPatterns\Bridge
 */
abstract class HandsetBrand
{
    protected $soft;

    /**
     * 手机品牌需要关注手机软件
     * @param HandsetSoft $soft
     */
    public function __construct(HandsetSoft $soft)
    {
        $this->soft = $soft;
    }
    abstract public function run();
}