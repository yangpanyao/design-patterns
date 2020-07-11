<?php
namespace DesignPatterns\State\example2\v3;

class FireMario implements IMario
{

    private $stateMachine;

    public function __construct(MarioStateMachine $stateMachine)
    {
        $this->stateMachine = $stateMachine;
    }
    public function getName()
    {
        return $this->stateMachine::Mario['FIRE'];
    }

    public function obtainMushRoom()
    {
        //do nothing...
    }

    public function obtainCape()
    {
        //do nothing...
    }

    public function obtainFireFlower()
    {
        //do nothing...
    }

    public function meetMonster()
    {
        $this->stateMachine->setCurrentState(new SmallMario($this->stateMachine));
        $this->stateMachine->setScore($this->stateMachine->getScore()-300);
    }
}