<?php
namespace DesignPatterns\Memento\v1;

class GameRole
{

    private $vit;//生命力
    private $atk;//攻击力
    private $def;//防御力

    /**
     * @return mixed
     */
    public function getVit()
    {
        return $this->vit;
    }
    /**
     * @param mixed $vit
     */
    public function setVit($vit): void
    {
        $this->vit = $vit;
    }

    /**
     * @return mixed
     */
    public function getAtk()
    {
        return $this->atk;
    }
    /**
     * @param mixed $atk
     */
    public function setAtk($atk): void
    {
        $this->atk = $atk;
    }

    /**
     * @return mixed
     */
    public function getDef()
    {
        return $this->def;
    }
    /**
     * @param mixed $def
     */
    public function setDef($def): void
    {
        $this->def = $def;
    }

    //角色状态显示
    public function StateDisplay()
    {
        echo "角色当前的状态：<br>体力:".$this->vit,
             "<br>攻击力:".$this->atk,"<br>防御力:".$this->def."<br>";
    }

    //获得初始状态
    public function GetInitState(){
        $this->vit = 100;
        $this->atk = 100;
        $this->def = 100;
    }

    //战斗
    public function Fight(){
        $this->vit = 0;
        $this->atk = 0;
        $this->def = 0;
    }
}