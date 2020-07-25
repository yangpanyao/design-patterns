<?php
namespace DesignPatterns\Visitor\v1;

abstract class ResourceFile
{
    protected $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    abstract public function extract2txt();
}