<?php

namespace DesignPattern\Behavioral\Iterator\Php\Interface;

interface IteratorInterface {
    public function hasNext() : bool;
    public function current() : string;
    public function next() : void;
}