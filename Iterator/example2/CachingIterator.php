<?php

$iterator = new \CachingIterator(new ArrayIterator(['C', 'C++', 'C#', 'PHP', 'Python', 'Go', 'Ruby']));

foreach ($iterator as $item) {
    if ($iterator->hasNext()) {
        echo $item.', ';
    } else {
        echo 'and '.$item;
    }
}
//输出结果 C, C++, C#, PHP, Python, Go, and Ruby
