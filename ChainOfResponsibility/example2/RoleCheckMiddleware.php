<?php
namespace DesignPatterns\ChainOfResponsibility\example2;
/**
 * 这个具体的中间件检查与请求相关联的用户是否具有足够的权限。
 * Class RoleCheckMiddleware
 * @package DesignPatterns\ChainOfResponsibility\example2
 */
class RoleCheckMiddleware extends Middleware
{
    public function check(string $email, string $password): bool
    {
        if ($email === "admin@example.com") {
            echo "RoleCheckMiddleware: Hello, admin!\n";

            return true;
        }
        echo "RoleCheckMiddleware: Hello, user!\n";

        return parent::check($email, $password);
    }
}