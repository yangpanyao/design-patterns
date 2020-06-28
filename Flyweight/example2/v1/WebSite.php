<?php
namespace DesignPatterns\Flyweight\example2\v1;
class WebSite
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function use()
    {
        echo "网站分类: ".$this->name."<br>";
    }
}

//ClientCode
$WebSite1 = new WebSite('产品展示');
$WebSite1->use();

$WebSite2 = new WebSite('产品展示');
$WebSite2->use();

$WebSite3 = new WebSite('产品展示');
$WebSite3->use();

$WebSite4 = new WebSite('博客');
$WebSite4->use();

$WebSite5 = new WebSite('博客');
$WebSite5->use();

$WebSite6 = new WebSite('博客');
$WebSite6->use();
