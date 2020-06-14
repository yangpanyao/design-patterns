<?php
namespace DesignPatterns\Builder\House;
require dirname(__DIR__).'/../vendor/autoload.php';
//client
class Client{
    /**
     * @param Director $director
     */
    public function run(Director $director){
        //示例一 使用将建造步骤托管至主管
        $builder = new HouseBuilder();
        $director->setBuilder($builder);
        $director->buildHouse();
        $builder->getHouse()->listParts();
        //示例二 建造模式可以不依赖主管director类使用
        echo "<br>";
        $builder->buildWalls();
        $builder->buildDoors();
        $builder->buildWindows();
        $builder->buildRoof();
        $builder->getHouse()->listParts();

    }
}

$client = new Client();
$client->run(new Director());