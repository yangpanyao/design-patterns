<?php
namespace DesignPatterns\Iterator\example1;

interface Container
{
    public function iterator(array $list);
}