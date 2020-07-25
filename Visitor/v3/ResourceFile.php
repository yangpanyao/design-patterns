<?php
namespace DesignPatterns\Visitor\v3;


abstract class ResourceFile
{
    protected $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    abstract public function acceptExtractor(Visitor $visitor);
    abstract public function acceptCompressor(Visitor $visitor);
}