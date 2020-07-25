<?php
namespace DesignPatterns\Visitor\v3;


class WordFile extends ResourceFile
{
    public function __construct($filePath)
    {
        parent::__construct($filePath);
    }

    public function acceptExtractor(Visitor $visitor)
    {
        $visitor->visitWordFile($this);
    }
    public function acceptCompressor(Visitor $visitor)
    {
        $visitor->visitWordFile($this);
    }
}