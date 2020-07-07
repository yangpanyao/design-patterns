<?php
namespace DesignPatterns\ChainOfResponsibility\example2;
/**
 * 这是一个作为实际处理程序的应用程序类。
 * 在启动与请求相关联的某些业务逻辑之前，Server类使用职责链模式执行一组不同的身份验证中间件。
 * Class Server
 * @package DesignPatterns\ChainOfResponsibility\example2
 */
class Server
{
    private $users = [];

    /**
     * @var Middleware
     */
    private $middleware;

    /**
     * 配置中间件对象
     * @param Middleware $middleware
     */
    public function setMiddleware(Middleware $middleware): void
    {
        $this->middleware = $middleware;
    }

    /**
     * 服务器从客户端获取电子邮件和密码并发送对中间件的授权请求。
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function logIn(string $email, string $password): bool
    {
        if ($this->middleware->check($email, $password)) {
            echo "Server: 授权成功！\n";

            // 省略一些后续处理代码

            return true;
        }

        return false;
    }
    //注册用户
    public function register(string $email, string $password): void
    {
        $this->users[$email] = $password;
    }
    //判断邮箱是否存在
    public function hasEmail(string $email): bool
    {
        return isset($this->users[$email]);
    }
    //验证用户密码
    public function isValidPassword(string $email, string $password): bool
    {
        return $this->users[$email] === $password;
    }
}