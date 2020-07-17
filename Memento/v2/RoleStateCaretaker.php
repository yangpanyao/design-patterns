<?php
namespace DesignPatterns\Memento\v2;
/**
 * 角色状态管理者类
 * Class RoleStateCaretaker
 * @package DesignPatterns\Memento\v2
 */
class RoleStateCaretaker
{
    private $memento;

    /**
     * @param mixed $memento
     */
    public function setMemento($memento): void
    {
        $this->memento = $memento;
    }

    /**
     * @return mixed
     */
    public function getMemento()
    {
        return $this->memento;
    }
}