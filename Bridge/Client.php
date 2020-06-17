<?php
namespace DesignPatterns\Bridge;
require __DIR__.'/../vendor/autoload.php';
class Client
{
    public function run()
    {
        //手机游戏
        $HandsetGame = new HandsetGame();
        //手机通讯录
        $HandsetAddressList = new HandsetAddressList();
        //手机音乐
        $HandsetMusic = new HandsetMusic();

        
        //运行手机品牌M游戏
        $HandsetBrandM = new HandsetBrandM($HandsetGame);
        $HandsetBrandM->run();
        //运行手机品牌M通讯录
        $HandsetBrandM = new HandsetBrandM($HandsetAddressList);
        $HandsetBrandM->run();
        //运行手机品牌M音乐
        $HandsetBrandM = new HandsetBrandM($HandsetMusic);
        $HandsetBrandM->run();

        echo '<br>';



        //运行手机品牌N游戏
        $HandsetBrandN = new HandsetBrandN($HandsetGame);
        $HandsetBrandN->run();
        //运行手机品牌N通讯录
        $HandsetBrandN = new HandsetBrandN($HandsetAddressList);
        $HandsetBrandN->run();
        //运行手机品牌N音乐
        $HandsetBrandN = new HandsetBrandN($HandsetMusic);
        $HandsetBrandN->run();



    }
}
$client = new Client();
$client->run();