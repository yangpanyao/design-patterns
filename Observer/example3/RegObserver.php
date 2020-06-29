<?php
namespace DesignPatterns\Observer\example3;

interface RegObserver
{
    public function handleRegSuccess($phone);
}