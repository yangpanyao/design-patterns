<?php
namespace DesignPatterns\ChainOfResponsibility\example2;
/**
 * 这个具体的中间件检查具有给定凭据的用户是否存在。
 * Class UserExistsMiddleware
 * @package DesignPatterns\ChainOfResponsibility\example2
 */
class UserExistsMiddleware extends Middleware
{
    private $server;

    public function __construct(Server $server)
    {
        $this->server = $server;
    }

    public function check(string $email, string $password): bool
    {
        if (!$this->server->hasEmail($email)) {
            echo "UserExistsMiddleware: 此邮件未注册！\n";

            return false;
        }

        if (!$this->server->isValidPassword($email, $password)) {
            echo "UserExistsMiddleware: 密码错误\n";

            return false;
        }

        return parent::check($email, $password);
    }
}