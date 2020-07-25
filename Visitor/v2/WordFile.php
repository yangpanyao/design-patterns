<?php
namespace DesignPatterns\Visitor\v2;


class WordFile extends ResourceFile
{
    public function __construct($filePath)
    {
        parent::__construct($filePath);
    }

    public function acceptExtractor(Extractor $extractor)
    {
        $extractor->extract2txtWordFile($this);
    }
    public function acceptCompressor(Compressor $compressor)
    {
        $compressor->compressWordFile($this);
    }
}