<?php
namespace DesignPatterns\Prototype\V3;
/**
 * 简历类
 * Class Resume
 * @package DesignPatterns\Prototype\V3
 */
class Resume
{
    private $name;
    private $sex;
    private $age;
    private $work;

    public function __construct($name)
    {
        $this->name = $name;
        $this->work = new WorkExperience();
    }
    //设置个人信息
    public function SetPersonalInfo(string $sex,string $age)
    {
        $this->sex = $sex;
        $this->age = $age;
    }
    //设置工作经历
    public function SetWorkExperience(string $timArea,string $company)
    {
        $this->work->SetWorkDate($timArea);
        $this->work->SetCompany($company);
    }
    //显示
    public function Display()
    {
        return $this->name." ".$this->sex." ".$this->age.
                "<br>工作经历：".$this->work->getWorkDate()." ".$this->work->getCompany()."<br>";
    }
    public function __clone()
    {
        $this->work = clone $this->work;
    }
}