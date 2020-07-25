<?php
namespace DesignPatterns\Visitor\v1;


class WordFile extends ResourceFile
{
    public function __construct($filePath)
    {
        parent::__construct($filePath);
    }

    public function extract2txt()
    {
        echo "Extract word.<br>";
    }
}