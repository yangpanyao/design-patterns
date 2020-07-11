<?php
namespace DesignPatterns\State\example2\v3;
class MarioStateMachine
{
    private $score;
    private $currentState;
    const Mario = array(
        'SMALL'=>0,//小马里奥
        'SUPER'=>1,//超级马里奥
        'CAPE'=>2,//斗篷马里奥
        'FIRE'=>3//火焰马里奥
    );

    public function __construct()
    {
        $this->score = 0;
        $this->currentState = new SmallMario($this);
    }
    public function obtainMushRoom()
    {
        $this->currentState->obtainMushRoom();
    }

    public function obtainCape()
    {
        $this->currentState->obtainCape();
    }

    public function obtainFireFlower()
    {
        $this->currentState->obtainFireFlower();
    }

    public function meetMonster()
    {
        $this->currentState->meetMonster();
    }

    /**
     * @return int
     */
    public function getScore(): int
    {
        return $this->score;
    }

    public function getCurrentState()
    {
        return array_search($this->currentState->getName(),self::Mario);
    }

    /**
     * @param int $score
     */
    public function setScore(int $score): void
    {
        $this->score = $score;
    }

    /**
     * @param IMario $currentState
     */
    public function setCurrentState(IMario $currentState): void
    {
        $this->currentState = $currentState;
    }
}