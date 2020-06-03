<?php
namespace DesignPatterns\Singleton;
/**
 * 单例模式
 * Class Singleton
 * @package DesignPatterns\Singleton
 */
class Singleton{
    /**
     * 声明一个静态属性用于储存实例
     * @var null
     */
    private static $instances = null;


    /**
     * 声明一个私有或受保护的构造方法，防止使用new运算符直接进行调用
     */
    private function __construct()
    {
      //
    }

    /**
     * 防止克隆多个实例
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    /**
     * 防止反序列化单例
     * @throws \Exception
     */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    /**
     *单例模式访问入口
     */
    public static function getInstance()
    {
        if (!isset(self::$instances)) {
            self::$instances = new static;
        }
        return self::$instances;
    }
}

function clientCode()
{
    $s1 = Singleton::getInstance();
    $s2 = Singleton::getInstance();
    if ($s1 === $s2) {
        echo "两个变量的实例相同";
    } else {
        echo "两个变量的实例不相同";
    }
}
clientCode();