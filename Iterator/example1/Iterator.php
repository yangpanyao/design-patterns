<?php
namespace DesignPatterns\Iterator\example1;

interface Iterator
{
    public function first();
    public function next();
    public function isDone();
    public function currentItem();
}