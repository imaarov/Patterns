<?php

namespace Imaarov\Patterns\Behavioral\Mediator;

class Button extends UIControl {
    private bool $isEnable;

    public function __construct(DialogBox $owner)
    {
        $this->owner = $owner;
    }

    public function setIsEnable(bool $IsEnable)
    {
        $this->isEnable = $IsEnable;
        $this->owner->change($this);
    }

    public function getIsEnable()
    {
        return $this->isEnable;
    }
}