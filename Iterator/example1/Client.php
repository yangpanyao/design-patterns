<?php
namespace DesignPatterns\Iterator\example1;
require dirname(__DIR__).'/../vendor/autoload.php';
class Client
{
    public function run()
    {
//        $arrayIterator = new ArrayIterator(array(1,2,3,4));
//        while (!$arrayIterator->isDone())
//        {
//            echo $arrayIterator->currentItem()."\n";
//            $arrayIterator->next();
//        }

        $arr = array(1,2,3,4);

        //for
        for ($i=0;$i<count($arr);$i++){
            echo $arr[$i]."\n";
        }
        echo '<br>';
        //foreach
        foreach ($arr as $value){
            echo $value."\n";
        }
        echo '<br>';
        //iterator
        $arrayContainer = new ArrayContainer();
        $arrayIterator = $arrayContainer->iterator($arr);
        while (!$arrayIterator->isDone())
        {
            echo $arrayIterator->currentItem()."\n";
            $arrayIterator->next();
        }

    }
}
$worker = new Client();
$worker->run();