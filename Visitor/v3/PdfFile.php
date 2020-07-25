<?php
namespace DesignPatterns\Visitor\v3;


class PdfFile extends ResourceFile
{
    public function __construct($filePath)
    {
        parent::__construct($filePath);
    }

    public function acceptExtractor(Visitor $visitor)
    {
        $visitor->visitPdfFile($this);
    }
    public function acceptCompressor(Visitor $visitor)
    {
        $visitor->visitPdfFile($this);
    }
}