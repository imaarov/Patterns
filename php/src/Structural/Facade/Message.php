<?php

namespace Imaarov\Patterns\Structural\Facade;

class Message {

    public function __construct(
        private string $content
    )
    { }
}