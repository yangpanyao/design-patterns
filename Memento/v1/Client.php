<?php
namespace DesignPatterns\Memento\v1;
require dirname(__DIR__).'/../vendor/autoload.php';
class Client
{
    public function run()
    {
        //大战boss前 获得初始角色状态
        $gameRole = new GameRole();
        $gameRole->GetInitState();
        $gameRole->StateDisplay();

        //保存进度  通过游戏角色的新实例，来保存进度
        $backup = new GameRole();
        $backup->setVit($gameRole->getVit());
        $backup->setAtk($gameRole->getAtk());
        $backup->setDef($gameRole->getDef());

        //大战boss损耗严重 所有数据损耗为0
        $gameRole->Fight();
        $gameRole->StateDisplay();

        //恢复之前状态
        $gameRole->setVit($backup->getVit());
        $gameRole->setAtk($backup->getAtk());
        $gameRole->setDef($backup->getDef());

        $gameRole->StateDisplay();


    }
}

$worker = new Client();
$worker->run();