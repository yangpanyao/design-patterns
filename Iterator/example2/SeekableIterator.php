<?php
$array = array('a','b','c','d');
//ArrayIterator 实现了接口 SeekableIterator
$iterator = new ArrayIterator($array);
$iterator->seek(3);
echo $iterator->current();
//输出结果 d