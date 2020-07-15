<?php
$iterator = new \ArrayIterator(['PHP', 'Python', 'Go']);
$iterator = new \NoRewindIterator($iterator);

foreach ($iterator as $item) {
    echo $item.PHP_EOL;
}

// doesn't do anything
foreach ($iterator as $item) {
    echo $item.PHP_EOL;
}

//输出结果 ：  PHP Python Go
