<?php
namespace DesignPatterns\ChainOfResponsibility\example2;
require dirname(__DIR__).'/../vendor/autoload.php';
/**
 * Class Client
 * @package DesignPatterns\ChainOfResponsibility\example2
 */
class Client
{
    public function run()
    {
        $server = new Server();
        $server->register("admin@example.com", "admin_pass");
        $server->register("user@example.com", "user_pass");
        //所有中间件都是链接的。客户端可以根据需要构建不同的链配置。
        $middleware = new ThrottlingMiddleware(2);
        $middleware->linkWith(new UserExistsMiddleware($server))
            ->linkWith(new RoleCheckMiddleware);
        $server->setMiddleware($middleware);

        do {
            echo "\nEnter your email:\n";
            $email = readline();
            echo "Enter your password:\n";
            $password = readline();
            $success = $server->logIn($email, $password);
        } while (!$success);
    }
}
$worker = new Client();
$worker->run();