<?php
namespace DesignPatterns\State\example2\v4;
class SuperMario implements IMario
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
        return $stateMachine::Mario['SUPER'];
    }

    public function obtainMushRoom(MarioStateMachine $stateMachine)
    {
        // do nothing...
    }

    public function obtainCape(MarioStateMachine $stateMachine)
    {
        $stateMachine->setCurrentState(CapeMario::getInstance());
        $stateMachine->setScore($stateMachine->getScore() + 200);
    }

    public function obtainFireFlower(MarioStateMachine $stateMachine)
    {
        $stateMachine->setCurrentState(FireMario::getInstance());
        $stateMachine->setScore($stateMachine->getScore() + 300);

    }

    public function meetMonster(MarioStateMachine $stateMachine)
    {
        $stateMachine->setCurrentState(SmallMario::getInstance());
        $stateMachine->setScore($stateMachine->getScore() -100);
    }
}