<?php
namespace DesignPatterns\Facade;
/**
 * 门面类
 * Class Facade
 * @package DesignPatterns\Facade
 */
class Facade
{
    private $systemOne;
    private $systemTwo;
    private $systemThree;
    private $systemFour;
    public function __construct()
    {
        $this->systemOne = new SubSystemOne();
        $this->systemTwo = new SubSystemTwo();
        $this->systemThree = new SubSystemThree();
        $this->systemFour = new SubSystemFour();
    }
    public function methodA()
    {
        echo "方法组A() ---\n";
        $this->systemOne->methodOne();
        $this->systemThree->methodThree();
    }
    public function methodB()
    {
        echo "方法组B() ---\n";
        $this->systemTwo->methodTwo();
        $this->systemFour->methodFour();
    }
}