<?php
$arr = array(1,2,3,4,5,6);
$arrayIterator = new \RecursiveArrayIterator($arr);
function GreaterThanThree($current)
{
    return $current > 3 != false;
}

$rs = new \CallbackFilterIterator($arrayIterator, 'GreaterThanThree');
print_r(iterator_to_array($rs));

/*
 输出结果
Array
(
    [3] => 4
    [4] => 5
    [5] => 6
)
 */