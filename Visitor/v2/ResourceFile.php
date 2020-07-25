<?php
namespace DesignPatterns\Visitor\v2;

abstract class ResourceFile
{
    protected $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    abstract public function acceptExtractor(Extractor $extractor);
    abstract public function acceptCompressor(Compressor $compressor);
}