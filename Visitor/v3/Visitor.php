<?php
namespace DesignPatterns\Visitor\v3;

interface Visitor
{
    public function visitPPTFile(PPTFile $PPTFile);
    public function visitPdfFile(PdfFile $pdfFile);
    public function visitWordFile(WordFile $wordFile);
}