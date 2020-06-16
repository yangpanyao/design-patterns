<?php
namespace DesignPatterns\Proxy;
require dirname(__DIR__).'/vendor/autoload.php';
class Client
{
    public function run(Downloader $subject)
    {
        $result = $subject->download("https://www.baidu.com");
        $result = $subject->download("https://www.baidu.com");
    }
}

//使用真实主题执行客户端代码
echo "使用真实主题执行客户端代码:<br>";
$client = new Client();
$realSubject = new RealDownloader();
$client->run($realSubject);
echo "<br>";

//使用代理执行相同的客户端代码
echo "使用代理执行相同的客户端代码:<br>";
$client->run(new ProxyDownloader($realSubject));
