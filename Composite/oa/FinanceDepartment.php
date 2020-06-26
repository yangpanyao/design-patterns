<?php

namespace DesignPatterns\Composite\OA;
/**
 * 财务部 树叶节点
 * Class HRDepartment
 * @package DesignPatterns\Composite\OA
 */
class FinanceDepartment extends Company
{

    public function Add(Company $company){}

    public function Remove(Company $company){}

    public function Display(int $depth)
    {
        echo str_repeat('-', $depth) . $this->name . "<br>";
    }

    public function LineOfDuty()
    {
        echo $this->name . " 公司财务收支管理<br>";
    }
}