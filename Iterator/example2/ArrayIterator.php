<?php
$arr = array('a','b','c','d');
$arrayIterator = new \ArrayIterator($arr);
foreach ($arrayIterator as $value){
    echo $value."\n";
}
//结果 a b c d


