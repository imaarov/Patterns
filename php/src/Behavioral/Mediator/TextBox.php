<?php

namespace Imaarov\Patterns\Behavioral\Mediator;

class TextBox extends UIControl {
    private string $content;

    public function __construct(DialogBox $owner)
    {
        $this->owner = $owner;
    }

    public function setcontent(string $content)
    {
        $this->content = $content;
        $this->owner->change($this);
    }

    public function getcontent()
    {
        return $this->content;
    }
}