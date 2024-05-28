<?php

namespace Imaarov\Patterns\Behavioral\Strategy\Interface;

interface FilterInterface {
    public function apply(string $fileName) : void;
}