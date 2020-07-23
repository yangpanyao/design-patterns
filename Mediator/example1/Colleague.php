<?php
namespace DesignPatterns\Mediator\example1;

abstract class Colleague
{
    protected $mediator;
    //构造方法，得到中介者对象
    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }
}