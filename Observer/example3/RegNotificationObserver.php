<?php
namespace DesignPatterns\Observer\example3;

class RegNotificationObserver implements RegObserver
{

    public function handleRegSuccess($phone)
    {
        echo "用户 ".$phone.",welcome <br>";
    }
}