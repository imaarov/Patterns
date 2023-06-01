<?php

namespace DesignPattern\Creational\Builder\Php;

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