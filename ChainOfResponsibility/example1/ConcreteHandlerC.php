<?php
namespace DesignPatterns\ChainOfResponsibility\example1;
/**
 * Class ConcreteHandlerC
 * @package DesignPatterns\ChainOfResponsibility\example1
 */
class ConcreteHandlerC extends Handler
{
    public function HandleRequest($request)
    {
        if ($request >=20 && $request < 30)
        {
            echo "ConcreteHandlerC处理的是20到30的参数，该参数是".$request."<br>";
        } else if ($this->successor != null) {
            // 转移
            $this->successor->HandleRequest($request);
        }
    }
}