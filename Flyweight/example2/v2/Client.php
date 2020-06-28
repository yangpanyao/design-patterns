<?php
namespace DesignPatterns\Flyweight\example2\v2;

require dirname(dirname(__DIR__)).'/../vendor/autoload.php';

/**
 * Class Client
 * @package DesignPatterns\Adapter\example2\v2
 */
class Client
{
    public function run()
    {
        $websiteFactory = new WebSiteFactory();
        //实例化产品展示的对象
        $website1 = $websiteFactory->getWebSiteCategory('产品展示');
        $website1->use();
        //共享上方生成的对象不在实例化
        $website2 = $websiteFactory->getWebSiteCategory('产品展示');
        $website2->use();

        $website3 = $websiteFactory->getWebSiteCategory('产品展示');
        $website3->use();

        $website4 = $websiteFactory->getWebSiteCategory('博客');
        $website4->use();

        $website5 = $websiteFactory->getWebSiteCategory('博客');
        $website5->use();

        $website6 = $websiteFactory->getWebSiteCategory('博客');
        $website6->use();

        //统计实例化个数 结果为2
        echo "网站分类总数为: ".$websiteFactory->getWebSiteCount();
    }
}
$worker = new Client();
$worker->run();
