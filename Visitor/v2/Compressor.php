<?php
namespace DesignPatterns\Visitor\v2;


class Compressor
{
    public function compressPPTFile(PPTFile $PPTFile)
    {
        echo  "compress  ppt.<br>";
    }
    public function compressPdfFile(PdfFile $pdfFile)
    {
        echo  "compress  pdf.<br>";
    }
    public function compressWordFile(WordFile $wordFile)
    {
        echo "compress word.<br>";
    }

}