<?php
namespace DesignPatterns\State\example2\v3;
/**
 * Class SmallMario
 * @package DesignPatterns\State\example2\v3
 */
class SmallMario implements IMario
{
    private $stateMachine;

    public function __construct(MarioStateMachine $stateMachine)
    {
        $this->stateMachine = $stateMachine;
    }
    public function getName()
    {
        return $this->stateMachine::Mario['SMALL'];
    }

    public function obtainMushRoom()
    {
        $this->stateMachine->setCurrentState(new SuperMario($this->stateMachine));
        $this->stateMachine->setScore($this->stateMachine->getScore()+100);
    }

    public function obtainCape()
    {
        $this->stateMachine->setCurrentState(new CapeMario($this->stateMachine));
        $this->stateMachine->setScore($this->stateMachine->getScore()+200);
    }

    public function obtainFireFlower()
    {
        $this->stateMachine->setCurrentState(new FireMario($this->stateMachine));
        $this->stateMachine->setScore($this->stateMachine->getScore()+300);
    }

    public function meetMonster()
    {
        // do nothing...
    }
}