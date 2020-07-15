<?php
$arrFirst = new \ArrayIterator(array(1,2,3));
$arrSecond = new \ArrayIterator(array(4,5,6));

$appendIterator = new \AppendIterator();
$appendIterator->append($arrFirst);
$appendIterator->append($arrSecond);

foreach ($appendIterator as $value) {
    echo $value."\n";
}
//输出结果 1 2 3 4 5 6