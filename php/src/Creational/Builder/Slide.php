<?php

namespace Imaarov\Patterns\Creational\Builder;

class Slide {

    public function __construct(
        private string $text
    )
    { }

    public function getText()
    {
        return $this->text;
    }
}