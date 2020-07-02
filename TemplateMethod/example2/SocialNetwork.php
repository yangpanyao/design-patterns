<?php
namespace DesignPatterns\TemplateMethod\example2;
/**
 * Class SocialNetwork
 * @package DesignPatterns\TemplateMethod\example2
 */
abstract class SocialNetwork
{
    protected $username;

    protected $password;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * 实际的模板方法按特定的顺序调用抽象步骤。
     * 子类可以实现所有的步骤，允许这个方法在社交网络上发布内容。
     * @param string $message
     * @return bool
     */
    public function post(string $message): bool
    {

        if ($this->logIn($this->username, $this->password)) {

            $result = $this->sendData($message);

            $this->logOut();

            return $result;
        }

        return false;
    }
    //登陆
    abstract public function logIn(string $userName, string $password): bool;
    //发布信息
    abstract public function sendData(string $message): bool;
    //退出
    abstract public function logOut(): void;
    //一个小助手方法，让等待时间感觉真实。
    protected function simulateNetworkLatency()
    {
        $i = 0;
        while ($i < 5) {
            echo ".";
            sleep(1);
            $i++;
        }
    }
}
