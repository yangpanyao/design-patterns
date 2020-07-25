<?php
namespace DesignPatterns\Visitor\v2;
require dirname(__DIR__) . '/../vendor/autoload.php';
class Client
{
    private $resourceFiles = [];
    public function run()
    {
        $this->listAllResourceFiles();
        foreach ($this->resourceFiles as $value) {
            $value->acceptExtractor(new Extractor());
        }
        foreach ($this->resourceFiles as $value) {
            $value->acceptCompressor(new Compressor());
        }
    }

    public function listAllResourceFiles()
    {
        //...根据后缀(pdf/ppt/word)由工厂方法创建不同的类对象(PdfFile/PPTFile/WordFile)
        $this->resourceFiles[] = new PdfFile('a.pdf');
        $this->resourceFiles[] = new PPTFile('b.ppt');
        $this->resourceFiles[] = new WordFile('c.word');

    }
}

$worker = new Client();
$worker->run();
//运行结果
//Extract pdf.
//Extract ppt.
//Extract word.
//compress pdf.
//compress ppt.
//compress word.
