<?php
namespace DesignPatterns\State\example2\v2;

class MarioStateMachine
{
    const Mario = array(
        'SMALL'=>0,//小马里奥
        'SUPER'=>1,//超级马里奥
        'CAPE'=>2,//斗篷马里奥
        'FIRE'=>3//火焰马里奥
    );
    const GOT = array(
        'GOT_MUSHROOM'=>0,
        'GOT_CAPE'=>1,
        'GOT_FIRE'=>2,
        'MET_MONSTER'=>3
    );
    private $transitionTable = [
        ['SUPER', 'CAPE', 'FIRE', 'SMALL'],
        ['SUPER', 'CAPE', 'FIRE', 'SMALL'],
        ['CAPE','CAPE','CAPE','SMALL'],
        ['FIRE', 'FIRE', 'FIRE', 'SMALL'],];

    private $actionTable = [
        [+100, +200, +300, +0],
        [+0, +200, +300, -100],
        [+0, +0, +0, -200],
        [+0, +0, +0, -300]];
    private $score;
    private $currentState;//当前状态

    private $stateValue;
    private $eventValue;

    public function __construct()
    {
        $this->score = 0;
        $this->currentState = self::Mario['SMALL'];
    }
    //获得蘑菇
    public function obtainMushRoom()
    {
        $this->executeEvent( self::GOT['GOT_MUSHROOM']);

    }
    //获得斗篷
    public function obtainCape()
    {
        $this->executeEvent( self::GOT['GOT_CAPE']);

    }
    //获得火焰
    public function obtainFireFlower()
    {
        $this->executeEvent( self::GOT['GOT_FIRE']);

    }
    //遇到怪物
    public function meetMonster(){
        $this->executeEvent( self::GOT['MET_MONSTER']);
    }
    public function executeEvent($eventValue){
        $stateValue = $this->currentState;
        $this->currentState = self::Mario[$this->transitionTable[$stateValue][$eventValue]];
        $this->score += $this->actionTable[$stateValue][$eventValue];

    }
    /**
     * @return int
     */
    public function getScore(): int
    {
        return $this->score;
    }

    /**
     * @return int
     */
    public function getCurrentState()
    {
        return array_search($this->currentState,self::Mario);
    }
}

//clientCode
$mario = new MarioStateMachine();
$mario->obtainMushRoom();//获取蘑菇
$mario->obtainFireFlower();//获取斗篷
$mario->meetMonster();//遇到怪物
$score = $mario->getScore();
$state = $mario->getCurrentState();
echo "mario score: ".$score." state: ".$state;