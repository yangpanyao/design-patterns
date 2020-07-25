<?php
namespace DesignPatterns\Visitor\v3;

class PPTFile extends ResourceFile
{
    public function __construct($filePath)
    {
        parent::__construct($filePath);
    }

    //...省略一大坨从PPT中抽取文本的代码...
    //...将抽取出来的文本保存在跟filePath同名的.txt文件中...
    public function acceptExtractor(Visitor $visitor)
    {
        $visitor->visitPPTFile($this);
    }

    public function acceptCompressor(Visitor $visitor)
    {
        $visitor->visitPPTFile($this);
    }
}