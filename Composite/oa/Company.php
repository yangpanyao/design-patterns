<?php
namespace DesignPatterns\Composite\OA;
/**
 * 公司类 抽象类或者接口
 * Class Company
 * @package DesignPatterns\Composite\OA
 */
abstract class Company
{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function Add(Company $company);//增加
    abstract public function Remove(Company $company);//移除
    abstract public function Display(int $depth);//显示
    abstract public function LineOfDuty();//增加履行责任的方法，不同的部门需要履行不同的责任

}