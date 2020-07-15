<?php

$obj = new stdClass();
$obj->Mon = "Monday";
$obj->Tue = "Tuesday";
$obj->Wed = "Wednesday";
$obj->Thu = "Thursday";
$obj->Fri = "Friday";
$obj->Sat = "Saturday";
$obj->Sun = "Sunday";

$infiniteIterator = new InfiniteIterator(new ArrayIterator($obj));
foreach ( new LimitIterator($infiniteIterator, 0, 14) as $value ) {
    print($value . PHP_EOL);
}

/*
输出结果
Monday
Tuesday
Wednesday
Thursday
Friday
Saturday
Sunday
Monday
Tuesday
Wednesday
Thursday
Friday
Saturday
Sunday
 */