<?php
namespace DesignPatterns\Mediator\example2;

class PhoneColleague extends Colleague
{
    public function sendMsg($num, $msg)
    {
        echo '固话--发出声音：'.$msg."<br>";
        $this->mediator->operation($num,$msg);
    }
    public function receiveMsg($msg)
    {
        echo '固话--接收声音：'.$msg."<br>";
    }

}