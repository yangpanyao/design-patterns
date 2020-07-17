<?php
namespace DesignPatterns\Memento\v2;
require dirname(__DIR__).'/../vendor/autoload.php';
class Client
{
    public function run()
    {

        $gameRole = new GameRole();
        //游戏角色初始状态，三项数据都是100
        $gameRole->GetInitState();
        $gameRole->StateDisplay();

        //保存进度
        //保存进度时，由于封装在Memento中，因此我们并不知道保存了哪些具体的角色数据
        $RoleStateCaretaker = new RoleStateCaretaker();
        $RoleStateCaretaker->setMemento($gameRole->SaveRoleState());

        //大战boss，损失严重
        $gameRole->Fight();
        $gameRole->StateDisplay();

        //恢复之前的状态
        $gameRole->RecoveryState($RoleStateCaretaker->getMemento());
        $gameRole->StateDisplay();

    }
}

$worker = new Client();
$worker->run();