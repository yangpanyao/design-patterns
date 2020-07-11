<?php
namespace DesignPatterns\State\example2\v4;
require dirname(dirname(__DIR__)).'/../vendor/autoload.php';
class Client
{
    public function run()
    {
        $mario = new MarioStateMachine();
        $mario->obtainMushRoom();//获取蘑菇
        $mario->obtainCape();//获取斗篷
        $mario->meetMonster();//遇到怪物
        $score = $mario->getScore();
        $state = $mario->getCurrentState();
        echo "mario score: ".$score." state: ".$state;
    }
}
$worker = new Client();
$worker->run();