<?php
namespace DesignPatterns\TemplateMethod\example2;
/**
 * Class Facebook
 * @package DesignPatterns\TemplateMethod\example2
 */
class ZhiHu extends SocialNetwork
{

    public function logIn(string $userName, string $password): bool
    {
        echo "\n正在检查用户的凭据...\n";
        echo "名称: " . $this->username . "\n";
        echo "密码: " . str_repeat("*", strlen($this->password)) . "\n";

        $this->simulateNetworkLatency();

        echo "\n\nzhihu: '" . $this->username . "' 登录成功\n";

        return true;
    }

    public function sendData(string $message): bool
    {
        echo "zhihu: '" . $this->username . "'发布了'".$message."'\n";

        return true;
    }

    public function logOut(): void
    {
        echo "zhihu: '" . $this->username . "' 退出登录.\n";
    }
}