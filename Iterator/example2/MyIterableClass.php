<?php
namespace DesignPatterns\Iterator\example2;

class MyIterableClass implements \IteratorAggregate {
    public $property1 = "Public property one";
    public $property2 = "Public property two";
    public $property3 = "Public property three";

    public function __construct() {
        $this->property4 = "last property";
    }

    public function getIterator() {
        return new \ArrayIterator($this);
    }

}

$obj = new MyIterableClass;

foreach($obj as $key => $value) {
    echo($key." --- ".$value);
    echo "<br>";
}
