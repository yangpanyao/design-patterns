<?php
namespace DesignPatterns\Composite\OA;

/**
 * 具体公司类 实现接口 树枝节点
 * Class ConcreteCompany
 * @package DesignPatterns\Composite\OA
 */
class ConcreteCompany extends Company
{

    private $childern = [];//一个子对象集合用来存储其下属的枝节点和叶节点。
    public function Add(Company $company)
    {
        array_push($this->childern, $company);
    }

    public function Remove(Company $company)
    {
        foreach ($this->childern as $key => $value) {
            if ($company === $value) {
                unset($this->childern[$key]);
            }
        }
    }
    // 显示其枝节点名称，并对其下级进行遍历
    public function Display(int $depth)
    {
        echo str_repeat('-', $depth).$this->name."<br>";
        foreach ($this->childern as $company) {
            $company->display($depth + 2);
        }
    }

    public function LineOfDuty()
    {
        foreach ($this->childern as $company) {
            $company->LineOfDuty();
        }
    }
}