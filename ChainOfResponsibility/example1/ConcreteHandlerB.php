<?php
namespace DesignPatterns\ChainOfResponsibility\example1;
/**
 * Class ConcreteHandlerB
 * @package DesignPatterns\ChainOfResponsibility\example1
 */
class ConcreteHandlerB extends Handler
{

    public function HandleRequest($request)
    {
        if ($request >=10 && $request < 20)
        {
            echo "ConcreteHandlerB处理的是10到20的参数，该参数是".$request."<br>";
        } else if ($this->successor != null) {
            // 转移
            $this->successor->HandleRequest($request);
        }
    }
}