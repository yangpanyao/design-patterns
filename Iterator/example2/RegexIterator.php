<?php
$arr = array('apple','avocado','orange','pineapple');
$arrayIterator = new \ArrayIterator($arr);
$regexIterator = new \RegexIterator($arrayIterator,'/^a/');

//print_r(iterator_to_array($regexIterator));//iterator_to_array — 将迭代器中的元素拷贝到数组

//输出结果  Array ( [0] => apple [1] => avocado )

echo  '<br>';

$arr = array('apple','avocado','orange','pineapple');
$arrayIterator = new \ArrayIterator($arr);
$regexIterator = new \RegexIterator($arrayIterator,'/^(a\w{3})\w*$/',RegexIterator::GET_MATCH);

print_r(iterator_to_array($regexIterator));

//输出结果 Array ( [0] => Array ( [0] => apple [1] => appl ) [1] => Array ( [0] => avocado [1] => avoc ) )

echo '<br>';

$arr = array('0'=>'A','1'=>'B','2'=>'C','3'=>'D','nonnumeric'=>'useless');
$arrayIterator = new \ArrayIterator($arr);
$regexIterator = new \RegexIterator(
            $arrayIterator,
            '/^\d*$/',
            RegexIterator::MATCH,
            RegexIterator::USE_KEY);

print_r(iterator_to_array($regexIterator));
//输出结果  Array ( [0] => A [1] => B [2] => C [3] => D )
