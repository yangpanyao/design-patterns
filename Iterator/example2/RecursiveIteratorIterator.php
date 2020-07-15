<?php
$arr = array (
    0=> 'a' ,
    1 => array('a','b', 'c') ,
    2 => 'b',
    3 => array('a', 'b', 'c') ,
    4 => 'c'
);
$arrayIterator = new \RecursiveArrayIterator ($arr) ;

$it = new \RecursiveIteratorIterator($arrayIterator);
print_r(iterator_to_array($it,false));

/*
 运行结果：
Array
(
    [0] => a
    [1] => a
    [2] => b
    [3] => c
    [4] => b
    [5] => a
    [6] => b
    [7] => c
    [8] => c
)
 */