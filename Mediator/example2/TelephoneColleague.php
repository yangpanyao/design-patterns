<?php
namespace DesignPatterns\Mediator\example2;


class TelephoneColleague extends Colleague
{
    public function sendMsg($num, $msg)
    {
        echo '手机--发出声音：'.$msg."<br>";
        $this->mediator->operation($num,$msg);
    }
    public function receiveMsg($msg)
    {
        echo '手机响铃-------<br>';
        echo '手机--接收声音：'.$msg."<br>";
    }
}