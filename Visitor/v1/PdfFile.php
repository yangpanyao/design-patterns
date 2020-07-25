<?php
namespace DesignPatterns\Visitor\v1;


class PdfFile extends ResourceFile
{
    public function __construct($filePath)
    {
        parent::__construct($filePath);
    }

    public function extract2txt()
    {
        echo "Extract pdf.<br>";
    }
}