<?php
namespace DesignPatterns\Iterator\example1;

class ArrayIterator implements Iterator
{
    private $current;
    private $list =[];

    public function __construct(array $list)
    {
        $this->list = $list;
        $this->current = 0;
    }

    public function first()
    {
        $this->current[0];
    }
    public function next()
    {
        $this->current++;
        if ($this->current < count($this->list)) {
           return $this->list[$this->current];
        }
    }
    public function isDone()
    {
        return $this->current >= count($this->list);
    }
    public function currentItem()
    {
        return $this->list[$this->current];
    }
}

//clientCode
