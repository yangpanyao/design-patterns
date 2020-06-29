<?php
namespace DesignPatterns\Observer\example3;
require dirname(__DIR__).'/../vendor/autoload.php';
class User
{
    private $regObservers=[];

    /**
     * @param mixed $regObservers
     */
    public function setRegObservers(RegObserver$regObservers)
    {
        $this->regObservers[] = $regObservers;
    }
    public function register($phone)
    {
        //省略输入参数的校验代码
        //省略注册
        foreach ($this->regObservers as $regObserver){
            $regObserver->handleRegSuccess($phone);
        }
    }
}

//clientCode
$user = new User();
$user->setRegObservers(new RegPromotionObserver());
$user->setRegObservers(new RegNotificationObserver());
$user->register('12345678901');
