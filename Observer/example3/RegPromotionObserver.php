<?php
namespace DesignPatterns\Observer\example3;

class RegPromotionObserver implements RegObserver
{

    public function handleRegSuccess($phone)
    {
        echo "用户 ".$phone.",你的投资体验金500元已到账<br>";
    }
}