<?php
namespace DesignPatterns\State\example2\v1;

class MarioStateMachine
{
    const Mario = array(
        'SMALL'=>0,//小马里奥
        'SUPER'=>1,//超级马里奥
        'CAPE'=>2,//斗篷马里奥
        'FIRE'=>3//火焰马里奥
    );
    private $score;
    private $currentState;//当前状态

    public function __construct()
    {
        $this->score = 0;
        $this->currentState = self::Mario['SMALL'];
    }
    //获得蘑菇
    public function obtainMushRoom()
    {
        if ($this->currentState == self::Mario['SMALL']){
            $this->currentState = self::Mario['SUPER'];
            $this->score +=100;
        }

    }
    //获得斗篷
    public function obtainCape()
    {
        if ($this->currentState == self::Mario['SMALL'] || $this->currentState == self::Mario['SUPER']) {
            $this->currentState = self::Mario['CAPE'];
            $this->score +=200;
        }

    }
    //获得火焰
    public function obtainFireFlower()
    {
        if ($this->currentState == self::Mario['SMALL'] || $this->currentState == self::Mario['SUPER']) {
            $this->currentState = self::Mario['FIRE'];
            $this->score +=300;
        }

    }
    //遇到怪物
    public function meetMonster(){
        if ($this->currentState == self::Mario['SUPER']) {
            $this->currentState = self::Mario['SMALL'];
            $this->score -=100;
            return;
        }
        if ($this->currentState == self::Mario['CAPE']) {
            $this->currentState = self::Mario['SMALL'];
            $this->score -=200;
            return;
        }
        if ($this->currentState == self::Mario['FIRE']) {
            $this->currentState = self::Mario['SMALL'];
            $this->score -=300;
            return;
        }
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
$mario->obtainCape();//获取斗篷
$mario->meetMonster();//遇到怪物
$score = $mario->getScore();
$state = $mario->getCurrentState();
echo "mario score: ".$score." state: ".$state;
