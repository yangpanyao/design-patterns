<?php
namespace DesignPatterns\Visitor\v2;


class PdfFile extends ResourceFile
{
    public function __construct($filePath)
    {
        parent::__construct($filePath);
    }

    public function acceptExtractor(Extractor $extractor)
    {
        $extractor->extract2txtPdfFile($this);
    }
    public function acceptCompressor(Compressor $compressor)
    {
        $compressor->compressPdfFile($this);
    }
}