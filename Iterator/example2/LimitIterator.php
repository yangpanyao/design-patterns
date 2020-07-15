<?php
$arr = array(1,2,3,4,5,6,7,8,9);
$arrayIterator = new \ArrayIterator($arr);
$limitIterator = new \LimitIterator($arrayIterator,3,4);
foreach ($limitIterator as $value){
    echo $value."\n";
}
//输出结果 4 5 6 7