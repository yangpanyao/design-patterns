<?php
namespace DesignPatterns\Flyweight\example1;
/**
 * Flyweight类，它是所有具体亨元类的超类或者接口，通过这个接口Flyweight可以接受并作用于外部状态
 * Class Flyweight
 * @package DesignPatterns\Flyweight\example1
 */
abstract class Flyweight
{
    abstract public function Operation(int $extrinsicstate);
}