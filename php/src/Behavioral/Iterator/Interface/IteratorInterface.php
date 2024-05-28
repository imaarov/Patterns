<?php

namespace Imaarov\Patterns\Behavioral\Iterator\Interface;

interface IteratorInterface {
    public function hasNext() : bool;
    public function current() : string;
    public function next() : void;
}