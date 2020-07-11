<?php
namespace DesignPatterns\State\example1;
/**
 * Context类，维护一个ConcreteState子类的实例，这个实例定义当前的状态。
 * Class Context
 * @package DesignPatterns\State\example1
 */
class Context
{
    private $state;

    //定义context的初始状态
    public function __construct(State $state)
    {
        $this->state = $state;
    }

    /**
     * @return State
     */
    public function getState(): State
    {
        return $this->state;
    }

    /**
     * @param State $state
     */
    public function setState(State $state): void
    {
        $this->state = $state;
    }
    //对请求做处理，并设置下一状态
    public function Request()
    {
        $this->state->Handle($this);
    }
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}