<?php
namespace DesignPatterns\Memento\v2;
/**
 * 角色状态储存箱
 * Class RoleStateMemento
 * @package DesignPatterns\Memento\v2
 */
class RoleStateMemento
{
    private $vit;//生命力
    private $atk;//攻击力
    private $def;//防御力

    public function __construct($vit,$atk,$def)
    {
        $this->vit = $vit;
        $this->atk = $atk;
        $this->def = $def;
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
    public function getVit()
    {
        return $this->vit;
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
    public function getAtk()
    {
        return $this->atk;
    }

    /**
     * @param mixed $def
     */
    public function setDef($def): void
    {
        $this->def = $def;
    }

    /**
     * @return mixed
     */
    public function getDef()
    {
        return $this->def;
    }


}