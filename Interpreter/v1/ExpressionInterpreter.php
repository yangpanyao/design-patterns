<?php
namespace DesignPatterns\Interpreter\v1;
/**
 * Class ExpressionInterpreter
 * @package DesignPatterns\Interpreter\example1
 */
class ExpressionInterpreter
{
    private $numbers = [];
    public function interpret(string $expression)
    {
        $elements = explode(" ",$expression);
        $length = count($elements);
        for ($i = 0; $i < ($length +1)/2;$i++) {
            $this->numbers[] = $elements[$i];
        }
        for ($i= ($length+1)/2; $i< $length;$i++) {
            $operator = $elements[$i];
            if (!in_array($operator,array('+','-','*','/'))) {
                throw new \Exception("表达式无效");
            }

            $number1 = array_shift($this->numbers);
            $number2 = array_shift($this->numbers);
            $result = 0;

            if ($elements[$i] == '+') {
                $result = $number1 + $number2;
            }elseif ($elements[$i] == '-') {
                $result = $number1 - $number2;
            }elseif ($elements[$i] == '*') {
                $result = $number1 * $number2;
            }elseif ($elements[$i] == '/') {
                $result = $number1 / $number2;
            }
            array_unshift($this->numbers,$result);
        }
        if (count($this->numbers) != 1) {
            throw  new  \Exception("表达式无效");
        }

        return array_pop($this->numbers);
    }
}

//clientCode
$str = "8 3 2 4 - + *";
$e = new ExpressionInterpreter();

echo $e->interpret($str);