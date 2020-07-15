<?php
$arr = array (
    0=> 'a' ,
    1 => array('a','b', 'c') ,
    2 => 'b',
    3 => array('a', 'b', 'c') ,
    4 => 'c'
);
$arrayIterator = new \RecursiveArrayIterator ($arr) ;

$it = new \RecursiveTreeIterator($arrayIterator);
print_r(iterator_to_array($it,false));

/*
运行结果：
Array
(
    [0] => |-a
    [1] => |-Array
    [2] => | |-a
    [3] => | |-b
    [4] => | \-c
    [5] => |-b
    [6] => |-Array
    [7] => | |-a
    [8] => | |-b
    [9] => | \-c
    [10] => \-c
)
 */