<?php
namespace DesignPatterns\Iterator\example1;

class ArrayContainer implements Container
{

    public function iterator(array $list)
    {
        return new ArrayIterator($list);
    }
}