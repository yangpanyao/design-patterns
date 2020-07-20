<?php
namespace DesignPatterns\Interpreter\v2;

class DivisionExpression implements Expression
{
    private $exp1;
    private $exp2;

    public function __construct(Expression $exp1,Expression $exp2)
    {
        $this->exp1 = $exp1;
        $this->exp2 = $exp2;
    }

    public function interpret()
    {
        return $this->exp1->interpret() / $this->exp2->interpret();
    }
}