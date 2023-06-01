<?php

namespace DesignPattern\Behavioral\Mediator\Php;

class ListBox extends UIControl {
    private string $selection;

    public function __construct(DialogBox $owner)
    {
        $this->owner = $owner;
    }

    public function setSelection(string $selection)
    {
        $this->selection = $selection;
        $this->owner->change($this);
    }

    public function getSelection()
    {
        return $this->selection;
    }
}