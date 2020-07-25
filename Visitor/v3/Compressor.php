<?php
namespace DesignPatterns\Visitor\v3;

class Compressor implements Visitor
{
    public function visitPPTFile(PPTFile $PPTFile)
    {
        echo  "compress  ppt.<br>";
    }

    public function visitPdfFile(PdfFile $pdfFile)
    {
        echo  "compress  pdf.<br>";
    }

    public function visitWordFile(WordFile $wordFile)
    {
        echo "compress word.<br>";
    }

}