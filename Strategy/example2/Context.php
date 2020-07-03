<?php
namespace DesignPatterns\Strategy\example2;

class Context
{
    private $strategy;
    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function ContextInterface()
    {
        $this->strategy->goAirport();
    }
}