<?php
namespace DesignPatterns\Adapter\example2;
require dirname(__DIR__).'/../vendor/autoload.php';
class Client
{
    public function run()
    {
        //默认人民币
        $moneyCalc = new MoneyCalc();
        echo 'rmb ¥'.$moneyCalc->requestCalc(40,50);
        echo '<br>';
        //美元金额
        $dollarCalc = new DollarCalcAdapter($moneyCalc);
        echo "dollar ：$".$dollarCalc->requestCalc(40,50);;

    }
}
$worker = new Client();
$worker->run();