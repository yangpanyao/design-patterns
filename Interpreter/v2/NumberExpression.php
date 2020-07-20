<?php
namespace DesignPatterns\Interpreter\v2;

class NumberExpression implements Expression
{
    private $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function interpret()
    {
        return $this->number;
    }
}