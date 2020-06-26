<?php
namespace DesignPatterns\Composite\OA;
/**
 * 人力资源部 树叶节点
 * Class HRDepartment
 * @package DesignPatterns\Composite\OA
 */
class HRDepartment extends Company
{

    public function Add(Company $company){}

    public function Remove(Company $company){}

    public function Display(int $depth)
    {
        echo str_repeat('-', $depth) . $this->name . "<br>";
    }

    public function LineOfDuty()
    {
        echo  $this->name." 员工招聘培训管理<br>";
    }
}