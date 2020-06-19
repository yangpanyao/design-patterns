<?php
namespace DesignPatterns\Decorator;
class BaseDecorator extends Notifier
{
    private $notifier;
    public function __construct(Notifier $notifier)
    {
        $this->notifier = $notifier;
    }
    public function send()
    {
        $this->notifier->send();
    }

}