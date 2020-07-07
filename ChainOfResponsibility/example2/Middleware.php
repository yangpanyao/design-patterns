<?php
namespace DesignPatterns\ChainOfResponsibility\example2;
/**
 * 职责链模式为组成链的对象声明了一个角色，即处理程序。
 * 在我们的示例中，让我们区分中间件和最终应用程序的处理程序，后者在请求通过所有中间件时执行对象。
 * 对象基本中间件类声明一个接口，用于将中间件对象链接到链中。
 * Class Middleware
 * @package DesignPatterns\ChainOfResponsibility\example2
 */
abstract class Middleware
{
    /**
     * @var Middleware
     */
    private $next;

    /**
     * 构建中间件对象链
     * @param Middleware $next
     * @return Middleware
     */
    public function linkWith(Middleware $next): Middleware
    {
        $this->next = $next;

        return $next;
    }

    /**
     * 子类必须重写此方法以提供自己的检查。如果子类不能处理一个请求，它可以回退到父实现。
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function check(string $email, string $password): bool
    {
        if (!$this->next) {
            return true;
        }

        return $this->next->check($email, $password);
    }
}