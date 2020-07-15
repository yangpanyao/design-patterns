<?php

foreach (new DirectoryIterator('../') as $fileInfo) {
    if($fileInfo->isDot()) continue;
    echo $fileInfo->getFilename() . "<br>\n";
}