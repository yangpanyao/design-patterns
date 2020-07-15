<?php
class GreaterThanThreeFilterIterator extends \FilterIterator {

    public function accept()
    {
       return ($this->current() > 3);
    }
}

$arr = new \ArrayIterator(array(1,2,3,4,5,6));
$iterator = new GreaterThanThreeFilterIterator($arr);
foreach ($iterator as $value) {
    echo $value."\n";
}

//输出结果 4 5 6