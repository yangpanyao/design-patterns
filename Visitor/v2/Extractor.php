<?php
namespace DesignPatterns\Visitor\v2;
class Extractor
{
    public function extract2txtPPTFile(PPTFile $PPTFile)
    {
        echo "Extract ppt.<br>";
    }

    public function extract2txtPdfFile(PdfFile $pdfFile)
    {
        echo "Extract pdf.<br>";
    }

    public function extract2txtWordFile(WordFile $wordFile)
    {
        echo "Extract word.<br>";
    }

}