<?php
namespace DesignPatterns\State\example2\v3;
class SuperMario implements IMario
{
    private $stateMachine;

    public function __construct(MarioStateMachine $stateMachine)
    {
        $this->stateMachine = $stateMachine;
    }
    public function getName()
    {
        return $this->stateMachine::Mario['SUPER'];
    }


    public function obtainMushRoom()
    {
        // do nothing...
    }

    public function obtainCape()
    {
        $this->stateMachine->setCurrentState(new CapeMario($this->stateMachine));
        $this->stateMachine->setScore($this->stateMachine->getScore() + 200);
    }

    public function obtainFireFlower()
    {
        $this->stateMachine->setCurrentState(new FireMario($this->stateMachine));
        $this->stateMachine->setScore($this->stateMachine->getScore() + 300);
    }

    public function meetMonster()
    {
        $this->stateMachine->setCurrentState(new SmallMario($this->stateMachine));
        $this->stateMachine->setScore($this->stateMachine->getScore() - 100);
    }
}