<?php

namespace DesignPatterns\Composite\OA;
require dirname(__DIR__) . '/../vendor/autoload.php';

/**
 * 客户端
 * Class Client
 * @package DesignPatterns\Composite\OA
 */
class Client
{
    public function run()
    {
        $root = new ConcreteCompany("北京总公司");
        $root->Add(new HRDepartment("总公司人力资源部"));
        $root->Add(new FinanceDepartment("总公司财务部"));

        $comp = new ConcreteCompany("上海华东分公司");
        $comp->Add(new HRDepartment("上海华东分公司人力资源部"));
        $comp->Add(new FinanceDepartment("上海华东分公司财务部"));
        $root->add($comp);

        $comp1 = new ConcreteCompany("南京办事处");
        $comp1->Add(new HRDepartment("南京办事处人力资源部"));
        $comp1->Add(new FinanceDepartment("南京办事处财务部"));
        $root->add($comp1);

        $comp2 = new ConcreteCompany("杭州办事处");
        $comp2->Add(new HRDepartment("杭州办事处人力资源部"));
        $comp2->Add(new FinanceDepartment("杭州办事处财务部"));
        $root->add($comp2);

        echo "结构图<br>";
        echo $root->Display(1);
        echo "职责<br>";
        echo $root->LineOfDuty();


    }
}

$worker = new Client();
$worker->run();