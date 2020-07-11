<?php
namespace DesignPatterns\State\example2\v4;

class FireMario implements IMario
{

    private $stateMachine;

    private static $instances = null;

    private function __construct(){}

    public static function getInstance()
    {
        if (!isset(self::$instances)) {
            self::$instances = new static;
        }
        return self::$instances;
    }

    public function getName(MarioStateMachine $stateMachine)
    {
        return $stateMachine::Mario['FIRE'];
    }

    public function obtainMushRoom(MarioStateMachine $stateMachine)
    {
        //do nothing...
    }

    public function obtainCape(MarioStateMachine $stateMachine)
    {
        //do nothing...
    }

    public function obtainFireFlower(MarioStateMachine $stateMachine)
    {
        //do nothing...
    }

    public function meetMonster(MarioStateMachine $stateMachine)
    {
        $stateMachine->setCurrentState(SmallMario::getInstance());
        $stateMachine->setScore($stateMachine->getScore() -300);
    }
}