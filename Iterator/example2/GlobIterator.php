<?php
$iterator = new \GlobIterator('*.php');
if (!$iterator->count()) {
    echo'无php文件';
} else {
    $n = 0;
    printf("总计 %d 个php文件\r\n", $iterator->count());
    foreach ($iterator as $item) {
        printf("[%d] %s\r\n", ++$n, $iterator->key());
    }
}

/*
 输出结果
总计 18 个php文件
[1] AppendIterator.php
[2] ArrayIterator.php
[3] CachingIterator.php
[4] CallbackFilterIterator.php
[5] DirectoryIterator.php
[6] GlobIterator.php
[7] GreaterThanThreeFilterIterator.php
[8] InfiniteIterator.php
[9] IteratorIterator.php
[10] LimitIterator.php
[11] MyIterableClass.php
[12] NoRewindIterator.php
[13] ParentIterator.php
[14] RecursiveArrayIterator.php
[15] RecursiveIteratorIterator.php
[16] RecursiveTreeIterator.php
[17] RegexIterator.php
[18] SeekableIterator.php
 */