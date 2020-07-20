<?php
namespace DesignPatterns\Interpreter\v2;
require dirname(__DIR__).'/../vendor/autoload.php';

class ExpressionInterpreter
{
    private $numbers = [];
    public function interpret(string $expression)
    {
        $elements = explode(" ",$expression);
        $length = count($elements);
        for ($i = 0; $i < ($length +1)/2;$i++) {
            $this->numbers[] = new NumberExpression($elements[$i]);
        }
        for ($i= ($length+1)/2; $i< $length;$i++) {
            $operator = $elements[$i];
            if (!in_array($operator,array('+','-','*','/'))) {
                throw new \Exception("表达式无效");
            }

            $exp1 = array_shift($this->numbers);
            $exp2 = array_shift($this->numbers);
            $combinedExp = null;

            if ($elements[$i] == '+') {
                $combinedExp = new AdditionExpression($exp1,$exp2);
            }elseif ($elements[$i] == '-') {
                $combinedExp = new SubstractionExpression($exp1,$exp2);
            }elseif ($elements[$i] == '*') {
                $combinedExp = new MultiplicationExpression($exp1,$exp2);
            }elseif ($elements[$i] == '/') {
                $combinedExp = new DivisionExpression($exp1,$exp2);
            }
            $result = $combinedExp->interpret();
            array_unshift($this->numbers,new NumberExpression($result));
        }
        if (count($this->numbers) != 1) {
            throw  new  \Exception("表达式无效");
        }

        return array_pop($this->numbers)->interpret();
    }
}
//ClientCode
$str = "8 3 2 4 - + *";
$e = new ExpressionInterpreter();

echo $e->interpret($str);