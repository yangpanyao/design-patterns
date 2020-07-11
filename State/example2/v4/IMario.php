<?php
namespace DesignPatterns\State\example2\v4;
/**
 * Interface IMario
 * @package DesignPatterns\State\example2\v4
 */
interface IMario
{
    public function getName(MarioStateMachine $stateMachine);
    //获取蘑菇
    public function obtainMushRoom(MarioStateMachine $stateMachine);
    //获取斗篷
    public function obtainCape(MarioStateMachine $stateMachine);
    //获得火焰
    public function obtainFireFlower(MarioStateMachine $stateMachine);
    //遇到怪物
    public function  meetMonster(MarioStateMachine $stateMachine);
}