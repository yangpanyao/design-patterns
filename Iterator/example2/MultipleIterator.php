<?php
$person_id = new \ArrayIterator(array('001', '002', '003'));
$person_name = new \ArrayIterator(array('张三', '李四', '王五'));
$person_age = new \ArrayIterator(array(22, 23, 11));
$mit = new \MultipleIterator(MultipleIterator::MIT_KEYS_ASSOC);
$mit->attachIterator($person_id, "ID");
$mit->attachIterator($person_name, "NAME");
$mit->attachIterator($person_age, "AGE");
echo"连接的迭代器个数:".$mit->countIterators() . "\n";
foreach ($mit as $person) {
    print_r($person);
}

/*
 输出结果
连接的迭代器个数:3
Array
(
    [ID] => 001
    [NAME] => 张三
    [AGE] => 22
)
Array
(
    [ID] => 002
    [NAME] => 李四
    [AGE] => 23
)
Array
(
    [ID] => 003
    [NAME] => 王五
    [AGE] => 11
)
 */