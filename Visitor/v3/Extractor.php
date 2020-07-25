<?php
namespace DesignPatterns\Visitor\v3;

class Extractor implements Visitor
{

    public function visitPPTFile(PPTFile $PPTFile)
    {
        echo 'Extract ppt.<br>';
    }

    public function visitPdfFile(PdfFile $pdfFile)
    {
        echo 'Extract ppt.<br>';
    }

    public function visitWordFile(WordFile $wordFile)
    {
        echo 'Extract ppt.<br>';
    }
}