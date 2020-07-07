<?php
namespace DesignPatterns\ChainOfResponsibility\example1;
/**
 * ConcreteHandler类，具体处理者类，处理它所负责的请求，可访问它的后继者，
 * 如果可处理该请求，就处理之，否则就将该请求转发给它的后继者。
 * Class ConcreteHandlerA
 * @package DesignPatterns\ChainOfResponsibility\example1
 */
class ConcreteHandlerA extends Handler
{
    public function HandleRequest($request)
    {
        if ($request >=0 && $request < 10)
        {
            echo "ConcreteHandlerA处理的是10到20的参数，该参数是".$request."<br>";
        } else if ($this->successor != null) {
            // 转移
            $this->successor->HandleRequest($request);
        }
    }
}