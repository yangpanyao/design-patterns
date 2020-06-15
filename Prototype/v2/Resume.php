<?php
namespace DesignPatterns\Prototype\V2;
class Resume
{
    private $name;
    private $sex;
    private $age;
    private $timeArea;
    private $company;

    /**
     * Resume constructor.
     * @param $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
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
        $this->timeArea = $timArea;
        $this->company = $company;
    }
    //显示
    public function Display(){
        return $this->name." ".$this->sex." ".$this->age."<br>工作经历：".$this->timeArea." ".$this->company."<br>";
    }
}