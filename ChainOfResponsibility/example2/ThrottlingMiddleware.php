<?php
namespace DesignPatterns\ChainOfResponsibility\example2;
/**
 * 这个具体的中间件检查是否有太多失败的登录请求。
 * Class ThrottlingMiddleware
 * @package DesignPatterns\ChainOfResponsibility\example2
 */
class ThrottlingMiddleware extends Middleware
{
    private $requestPerMinute;//设置可登录失败的请求次数

    private $request;

    private $currentTime;

    public function __construct(int $requestPerMinute)
    {
        $this->requestPerMinute = $requestPerMinute;
        $this->currentTime = time();
    }

    /**
     * 请注意，parent:：check调用既可以插入此方法的开头，也可以插入结束。
     * 这个在所有中间件对象上提供比简单循环更大的灵活性。例如，中间件可以通过在所有其他检查之后运行其检查来更改检查顺序。
     * 也就是我们常说的前置中间件，与后置中间件
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function check(string $email, string $password): bool
    {
        if (time() > $this->currentTime + 60) {
            $this->request = 0;
            $this->currentTime = time();
        }

        $this->request++;

        if ($this->request > $this->requestPerMinute) {
            echo "ThrottlingMiddleware: 超过请求限制！\n";
            die();
        }

        return parent::check($email, $password);
    }
}